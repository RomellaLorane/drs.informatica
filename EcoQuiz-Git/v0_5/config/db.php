<?php

class Database{
    private $host = "localhost";
    private $db_name = "ecoquiz-1";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Definindo modo de erro
        } catch (PDOException $exception) {

            $codigo = "Connection error: ";
            $mensagem = $exception->getMessage();
            exibirErro($codigo, $mensagem);
        }
        return $this->conn;
    }
}