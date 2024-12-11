<?php
class RespostaModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    // Método para verificar se uma opção de resposta é correta
    public function buscarRespostasCorretasPorQuiz($quiz_id) {
        try {
            $sql = "SELECT perguntas.pergunta_id AS pergunta_id, opcoes.opcao_id AS resposta_correta
                      FROM perguntas
                      INNER JOIN opcoes ON perguntas.pergunta_id = opcoes.opcao_id
                      WHERE perguntas.quiz_id = :quiz_id AND opcoes.correta = 1";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':quiz_id', $quiz_id, PDO::PARAM_INT);
            $stmt->execute();
    
            $respostasCorretas = [];
            
            // Se não houverem resultados, retorna um array vazio
            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $respostasCorretas[$row['pergunta_id']] = $row['resposta_correta'];
                }
            }
            
            return $respostasCorretas;
        } catch (PDOException $e) {
            // Caso ocorra um erro, você pode logar ou exibir um erro
            echo "Erro ao buscar respostas corretas: " . $e->getMessage();
            return []; // Retorna um array vazio caso ocorra um erro
        }
    }
    
    
}
