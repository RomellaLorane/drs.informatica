<?php
include_once '../config/db.php';  // Inclui a configuração de banco de dados
include_once '../app/models/respostaModel.php';  // Certifique-se de que o nome da classe é RespostaModel

class ResultadoController {
    private $respostaModel;
    private $conn;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->opcaoModel = new RespostaModel($db);
    }

    // Método principal para processar as respostas do quiz
    public function calcularResultado() {
        // Verifica se o usuário já respondeu as perguntas
        if (!isset($_SESSION['respostas']) || empty($_SESSION['respostas'])) {
            // Se não houver respostas na sessão, redireciona para o quiz
            header('Location: /EcoQuiz-Git/v0_5/public/index.php?url=quiz/exibirQuiz');
            exit;
        }
    
        // Recupera o ID do quiz
        if (!isset($_SESSION['quiz_id'])) {
            header('Location: /EcoQuiz-Git/v0_5/public/index.php?url=quiz/exibirQuiz');
            exit;
        }
        $quiz_id = $_SESSION['quiz_id'];
    
        // Obtém as respostas corretas do banco de dados
        $respostasCorretas = $this->opcaoModel->buscarRespostasCorretasPorQuiz($quiz_id);
    
        // Inicializa variáveis para calcular os resultados
        $totalPerguntas = count($respostasCorretas);
        $acertos = 0;
        $erros = 0;
    
        // Verifica se as respostas estão sendo corretamente armazenadas
        if (!$totalPerguntas || !is_array($respostasCorretas)) {
            echo "Erro: Não há respostas corretas ou elas não estão em formato de array.";
            die();
        }
    
        // Percorre as respostas do usuário e calcula os acertos e erros
        foreach ($_SESSION['respostas'] as $pergunta_id => $resposta_usuario) {
            // Verifica se a resposta do usuário corresponde à resposta correta
            if (isset($respostasCorretas[$pergunta_id]) && $respostasCorretas[$pergunta_id] == $resposta_usuario) {
                $acertos++;
            } else {
                $erros++;
            }
        }
    
        // Calcula a porcentagem de acertos
        $porcentagemAcertos = ($acertos / $totalPerguntas) * 100;
        // Calcula a porcentagem de erros
        $porcentagemErros = ($erros / $totalPerguntas) * 100;
    
        // Dados para exibição na tela
        $resultado = [
            'totalPerguntas' => $totalPerguntas,
            'acertos' => $acertos,
            'erros' => $erros,
            'porcentagemAcertos' => $porcentagemAcertos,
            'porcentagemErros' => $porcentagemErros,
        ];
    
        // Envia os dados para a view de resultado
        require_once '../app/views/pontuacao_view.php';
    }
}    