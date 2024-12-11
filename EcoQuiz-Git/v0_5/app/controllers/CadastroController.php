<?php

require_once '../app/models/userModel.php';
require_once '../config/db.php';

class CadastroController {
    private $model;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->model = new UserModel($db);
    }

    public function cadastrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $nome = $_POST['nome'] ?? '';
            $senha = $_POST['senha'] ?? '';
            $c_senha = $_POST['c_senha'] ?? '';

            // Validação básica
            if ($senha !== $c_senha) {
                $erro = "As senhas não coincidem!";
                require_once '../app/views/cadastro_view.php';
                return;
            }

            // Criptografar a senha
            $senhaHash = password_hash($senha, PASSWORD_BCRYPT);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email inválido.";
                return false;
            } else {
                // Chamar o model para inserir no banco
                try {
                    $this->model->cadastrarUsuario($email, $nome, $senha);

                    // Redirecionar para login após cadastro bem-sucedido
                    header("Location: /EcoQuiz-Git/v0_5/public/index.php");
                    exit;
                } catch (PDOException $e) {
                    // Tratamento de erro para email duplicado
                    if ($e->getCode() == 23000) { // Código de erro SQL para "chave única violada"
                        $erro = "Este email já está cadastrado. Tente outro.";
                    } else {
                        $erro = "Ocorreu um erro ao processar seu cadastro. Tente novamente.";
                    }

                    // Recarrega a página de cadastro com a mensagem de erro
                    require_once '../app/views/cadastro_view.php';
                }
            }
        } else {
                require_once '../app/views/cadastro_view.php';
        }
    }
}
