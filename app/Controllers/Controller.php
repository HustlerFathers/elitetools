<?php

namespace App\Controllers;

use App\Config\TableConfig;
use Exception;

abstract class Controller
{
    /**
     * Stores table configuration mappings.
     *
     * @var array
     */
    protected array $tableConfig;

    /**
     * Constructor loads table configuration.
     */
    public function __construct()
    {
        $this->tableConfig = TableConfig::getAllTables();
    }

    /**
     * Retrieve a table name by its key.
     *
     * @param string $key
     * @return string
     * @throws Exception if the table key is not defined.
     */
    public function getTable(string $key): string
    {
        return TableConfig::getTable($key);
    }

    /**
     * Render a view with the given data.
     *
     * @param string $view  View file path relative to app/Views (without extension).
     * @param array  $data  Associative array of data for the view.
     */
    protected function render(string $view, array $data = []): void
    {
        $viewPath = "app/Views/{$view}.php";

        if (file_exists($viewPath)) {
            extract($data);
            require_once $viewPath;
        } else {
            http_response_code(404);
            require_once  "app/Views/errors/404.php";
            exit;
        }
    }
}