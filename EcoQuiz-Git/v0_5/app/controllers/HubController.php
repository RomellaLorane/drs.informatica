<?php
require_once '../config/db.php';
require_once '../app/models/quizModel.php';

class HubController {
    private $model;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->model = new QuizModel($db);
    }

    public function showHub() {
        if (isset($_POST['quiz_id'])) { 
            // Definindo o ID na sessão
            $_SESSION['quiz_id'] = $_POST['quiz_id'];


            if (isset($_SESSION['usuario'])) {
                // Inicializa o QuizController
                header('Location: /EcoQuiz-Git/v0_5/public/index.php?url=quiz/exibirQuiz');
            } else {
                header('Location: /EcoQuiz-Git/v0_5/public/index.php?url=login/login');
            }
        } else {
            // Busca todos os quizzes
            $quizzes = $this->model->getQuizzes();
            $_SESSION['pergunta_index'] = 0;
            // Inclui a view
            require_once '../app/views/dashboard_view.php';
        }
    }
    

}