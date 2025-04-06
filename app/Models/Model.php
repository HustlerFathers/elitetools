<?php
namespace App\Models;

use Exception;
use mysqli_stmt;

abstract class Model {
    protected static ?\mysqli $db = null;

    public static function getDb(): \mysqli {
        if (static::$db === null) {
            static::$db = \App\Core\Database::connect();
        }
        return static::$db;
    }

    private static function executeQuery($query, $types, $params): \mysqli_stmt {
        $db = self::getDb();
        $stmt = $db->prepare($query);
        if (!$stmt) {
            throw new Exception("Failed to prepare statement: " . $db->error);
        }
        if (!empty($params) && $types !== "") {
            if (!$stmt->bind_param($types, ...$params)) {
                throw new Exception("Failed to bind parameters: " . $stmt->error);
            }
        }
        if (!$stmt->execute()) {
            throw new Exception("Failed to execute statement: " . $stmt->error);
        }
        return $stmt;
    }

    public static function fetchAll($query, $types, $params): array {
        $stmt = self::executeQuery($query, $types, $params);
        // If mysqlnd is available, use get_result().
        if (method_exists($stmt, 'get_result')) {
            $result = $stmt->get_result();
            if ($result === false) {
                throw new Exception("Failed to get result: " . $stmt->error);
            }
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            $stmt->close();
            return $rows;
        }
        // Fallback if get_result() is not available.
        $meta = $stmt->result_metadata();
        if (!$meta) {
            $stmt->close();
            return [];
        }
        $fields = [];
        while ($field = $meta->fetch_field()) {
            $fields[] = &$row[$field->name];
        }
        call_user_func_array([$stmt, 'bind_result'], $fields);
        $rows = [];
        while ($stmt->fetch()) {
            $tmp = [];
            foreach ($row as $key => $val) {
                $tmp[$key] = $val;
            }
            $rows[] = $tmp;
        }
        $stmt->close();
        return $rows;
    }

    public static function fetchOne($query, $types, $params): ?array {
        $rows = self::fetchAll($query, $types, $params);
        return $rows[0] ?? null;
    }

    public static function execute($query, $types, $params): bool {
        $stmt = self::executeQuery($query, $types, $params);
        $affectedRows = $stmt->affected_rows;
        $stmt->close();
        return $affectedRows > 0;
    }
}