<?php
require_once '../config/db.php';
include_once '../app/models/perguntaModel.php';
include_once '../app/models/opcaoModel.php';
require_once '../app/models/quizModel.php';
include_once '../app/models/respostaModel.php';

class QuizController {
    private $perguntaModel;
    private $opcaoModel;
    private $quizModel;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->perguntaModel = new Pergunta($db);
        $this->opcaoModel = new Opcao($db);
        $this->quizModel = new QuizModel($db);
    }

    public function exibirQuiz() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    
        // Verifica se o quiz foi encontrado
        if (isset($_SESSION['quiz_id'])) {
            $quiz_id = $_SESSION['quiz_id'];
            $quiz = $this->quizModel->buscarPorId($quiz_id);
            if (!$quiz) {
                header('Location: ../app/views/error_view.php');
                exit;
            }
        } else {
            header('Location: ../app/views/error_view.php');
            exit;
        }
    
        // Inicializa a variável de índice da pergunta, caso não exista
        if (!isset($_SESSION['pergunta_index'])) {
            $_SESSION['pergunta_index'] = 0;
        }
    
        $perguntas = $this->perguntaModel->buscarPorQuiz($quiz['quiz_id']);
        
        // Verifica se as perguntas são um array válido
        if (!is_array($perguntas) || empty($perguntas)) {
            header('Location: ../app/views/error_view.php');
            exit;
        }
    
        // Verifica se a pergunta atual existe
        if (!isset($perguntas[$_SESSION['pergunta_index']])) {
            echo "Erro: Índice inválido em \$perguntas.";
            var_dump($_SESSION['pergunta_index']);
            var_dump($perguntas);
            die();
        }
    
        // Inicializa a resposta se não houver
        if (!isset($_SESSION['respostas']) || !is_array($_SESSION['respostas'])) {
            $_SESSION['respostas'] = []; // Inicializa como um array vazio
        }
    
        // Obtém a pergunta atual
        $pergunta = $perguntas[$_SESSION['pergunta_index']];
        $opcoes = $this->opcaoModel->buscarPorPergunta($pergunta['pergunta_id']);
    
        // Verifica se as opções são válidas
        if (!is_array($opcoes)) {
            echo "Erro: \$opcoes não é um array.";
            var_dump($opcoes);
            die();
        }
    
        $respostaSelecionada = $_SESSION['respostas'][$pergunta['pergunta_id']] ?? null;
    
        // Organiza os dados para exibição na view
        $quizData = [
            'quiz' => $quiz,
            'pergunta' => $pergunta,
            'perguntas' => $perguntas,
            'opcoes' => $opcoes,
            'respostaSelecionada' => $respostaSelecionada,
        ];
    

    
        // Processa o formulário de respostas
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!isset($_SESSION['respostas'])) {
                $_SESSION['respostas'] = [];
            }
    
            // Verifica se o índice é válido e faz a navegação
            if ($_SESSION['pergunta_index'] < count($perguntas)) {
                $pergunta_id = $perguntas[$_SESSION['pergunta_index']]['pergunta_id'];
                $_SESSION['respostas'][$pergunta_id] = $_POST['resposta'] ?? null;  // Previne erro se não for definida
    
                if (isset($_POST['proxima'])) {
                    $_SESSION['pergunta_index']++;
                }
    
                if (isset($_POST['voltar'])) {
                    $_SESSION['pergunta_index'] = max(0, $_SESSION['pergunta_index'] - 1);
                }
    
                // Se terminou o quiz, redireciona para os resultados
                if ($_SESSION['pergunta_index'] >= count($perguntas)) {
                    header('Location: /EcoQuiz-Git/v0_5/public/index.php?url=resultado/calcularResultado');
                    exit;
                }
    
                header('Location: /EcoQuiz-Git/v0_5/public/index.php?url=quiz/exibirQuiz');
                exit;
            }
        }

        require_once '../app/views/quiz_view.php';
    }
    
}