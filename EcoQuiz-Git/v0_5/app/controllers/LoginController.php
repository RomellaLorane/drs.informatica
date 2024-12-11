<?php

require_once '../app/models/userModel.php';
require_once '../config/db.php';

class LoginController {
    private $model;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->model = new UserModel($db);
    }

    public function login() {
        if (isset($_POST['email']) && isset($_POST['senha'])) {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $user = $this->model->login($email, $senha);
            if ($user) {
                $_SESSION['usuario'] = $user['email'];
                header('Location: /EcoQuiz-Git/v0_5/public/index.php?url=login/dashboard'); 
            } else {
                $erro = "Email ou senha inválidos!";
                require_once '../app/views/login_view.php';
            }
        } else {
            require_once '../app/views/login_view.php';
        }
    }

    public function dashboard() {
            // Inicializa o HubController
            header('Location: /EcoQuiz-Git/v0_5/public/index.php?url=hub/showHub');
    }

    public function logout() {
        session_destroy();
        header('Location: /EcoQuiz-Git/v0_5/public/index.php?url=login/login');
    }

    public function cadastro() {
        header('Location: /EcoQuiz-Git/v0_5/public/index.php?url=cadastro/cadastrar');
    }
}