<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/login.css">
</head>
<body>
    <div id="img-fundo">
	<div id="corpo-cortina">
	
      <!--Inclui o header-->
      <?php include_once 'header_view.php';?>


        <div id="corpo-real">
            <form class="card-login" method="POST">
                <img id="logo-login" src="<?= BASE_URL ?>public/assets/img/login-cadastro.png" alt="login-avatar">
                <img div id="logo-left" src="<?= BASE_URL ?>public/assets/img/logo-questions.png" alt="logo">
                <h1 div id="text">Faça login para prosseguir</h1>
                <?php if (isset($erro)) echo "<p>$erro</p>"; ?>
                <br>
                <input id="email" name="email" type="email" placeholder="Email" required autofocus>
                <input id="senha" name="senha" type="password" placeholder="Senha" required>
                
                <a id="alt-senha" href="">Esqueci a Senha</a>
                
                <button id="login-btn" type="submit" onclick="verificarEmail();" src="<?= BASE_URL ?>public/assets/iniciar-quiz.html">Login</button>

                <p id="alt-senha">Ainda não tenho conta. <a id="alt-cadastro" href="index.php?url=login/cadastro" >Cadastrar-se.</a>
                </p>
              </form>
        </div>
        </div>
        
    </div>
    <script src="<?= BASE_URL ?>public/assets/js/login.js"></script>
    <script src="<?= BASE_URL ?>public/assets/js/menu.js"></script>
</body>
</html>