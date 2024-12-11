<?php
class Pergunta {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function buscarPorQuiz($quiz_id) {
        $query = "SELECT * FROM perguntas WHERE quiz_id = :quiz_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':quiz_id', $quiz_id);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Deve retornar um array, mesmo que vazio
    }
    
}

