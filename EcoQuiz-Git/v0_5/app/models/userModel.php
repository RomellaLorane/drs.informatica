<?php

class UserModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function login($email, $senha) {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($user && password_verify($senha, $user['senha'])) {
            return $user; // Retorna o usuário se a senha estiver correta
        } else {
            return false; // Retorna false se a senha ou email forem incorretos
        }
    }
    

    public function cadastrarUsuario($email, $nome, $senha) {
        // Hash da senha para maior segurança
        $senhaHash = password_hash($senha, PASSWORD_BCRYPT);

        $query = "INSERT INTO usuarios (email, nome, senha) VALUES (:email, :nome, :senha)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':senha', $senhaHash);

        return $stmt->execute();
    }
}