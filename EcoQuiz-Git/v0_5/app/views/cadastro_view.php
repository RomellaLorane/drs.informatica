<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/cadatro.css">
</head>
<body>
    <div id="img-fundo">
	<div id="corpo-cortina">
	
      <!--Inclui o header-->
      <?php include_once 'header_view.php';?>


            <div id="corpo-real">

                <form id="card-cadastro" method="POST">
                    <img id="logo-cadastro" src="<?= BASE_URL ?>public/assets/img/login-cadastro.png" alt="">
                    <img div id="logo-left" src="<?= BASE_URL ?>public/assets/img/logo-questions.png" alt="logo">
                    <?php if (isset($erro)) echo "<p>$erro</p>"; ?>
                    <br>
                    <input type="text" name="nome" id="user_id" placeholder="Nome de usuário" required autofocus>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                    <input type="password" name="c-senha" id="c-senha" placeholder="Confirmar Senha" required>
                    <br>
                    <button id="cadastro-btn" type="submit" onclick=" return verificarGeral();">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="<?= BASE_URL ?>public/assets/js/cadastro.js"></script>
    <script src="<?= BASE_URL ?>public/assets/js/menu.js"></script>
</body>
</html>