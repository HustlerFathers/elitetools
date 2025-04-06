<?php
namespace App\Controllers;

use App\Core\Session;
use App\Controllers\Controller;
use App\Models\User;
use App\Libraries\Guest\TemplateEngine;

class AuthController extends Controller {

    public function login() {
        $data = ['page_title' => 'Login'];
        TemplateEngine::displayHeader($data);
        $this->render('login/index', $data);
        TemplateEngine::displayFooter();
    }




public function loginPost() { 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');

        if (empty($email) || empty($password)) {
            echo json_encode(['success' => false, 'message' => 'All fields are required.']);
            exit;
        }

        $user = User::findByEmail($email);
        if (!$user || !password_verify($password, $user->password)) {
            echo json_encode(['success' => false, 'message' => 'Invalid credentials.']);
            exit;
        }

        // ✅ Start Secure Session
        Session::start();
        Session::set('user_id', $user->id);

        // ✅ Generate & Store API Token
        $token = User::generateToken($user->id);
        Session::set('api_token', $token);

        echo json_encode([
            'success' => true,
            'message' => 'Login successful!',
            'token' => $token
        ]);
        exit;
    }

    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
    exit;
}




        public function register() {
        $data = ['page_title' => 'Register'];
        TemplateEngine::displayHeader($data);
        $this->render('register/index', $data);
        TemplateEngine::displayFooter();
    }

    public function registerPost() { // ✅ Register logic unchanged
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $confirm_password = $_POST['confirm_password'] ?? '';

            if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
                return $this->render('register/index', ['error' => 'All fields are required.']);
            }

            if ($password !== $confirm_password) {
                return $this->render('register/index', ['error' => 'Passwords do not match.']);
            }

            if (User::findByEmail($email)) {
                return $this->render('register/index', ['error' => 'Email already registered.']);
            }

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            User::create(['username' => $username, 'email' => $email, 'password' => $hashedPassword]);

            header('Location: /login');
            exit;
        }

        return $this->render('register/index');
    }

public function logout() { 
    Session::start();
    $user_id = Session::get('user_id');

    if ($user_id) {
        User::invalidateToken($user_id);
    }

    Session::destroy();

    echo json_encode(['success' => true, 'message' => 'You have been logged out.']);
    exit;
}
}