<?php
class QuizModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getQuizzes() {
        $sql = "SELECT nome, descricao, imagem, quiz_id FROM quiz";// Se for usar imagem adiciona depois
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        // Retorna todos os resultados como array associativo
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($quiz_id) {
        $sql = "SELECT * FROM quiz WHERE quiz_id = :quiz_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':quiz_id', $quiz_id, PDO::PARAM_INT);
        $stmt->execute();
    
        // Retorna um único quiz ou null caso não encontre
        return $stmt->fetch(PDO::FETCH_ASSOC); // Retorna um array associativo ou false
    }    
}
