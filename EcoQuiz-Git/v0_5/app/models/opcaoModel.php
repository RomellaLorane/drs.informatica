<?php
class Opcao {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function buscarPorPergunta($pergunta_id) {
        $sql = "SELECT * FROM opcoes WHERE pergunta_id = :pergunta_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":pergunta_id", $pergunta_id, PDO::PARAM_INT);
        $stmt->execute();
        
        // Retorna todos os resultados como array associativo
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

