<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoQuiz</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/index.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/cookies.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
  <div id="img-fundo">
	<div id="corpo-cortina">
    <!--Inclui o header-->
	  <?php include_once 'header_view.php';?>

  <div id="corpo-real">
	
	<div id="card-central">
	<img class="animate__animated animate__slideInDown" id="img-central" src="<?= BASE_URL ?>public/assets/img/logo-questions.png" alt="Logo-EcoQuiz">
	<h3 class="animate__animated animate__zoomInUp" id="frase-central">Desafie sua Consciência Verde</h3>
	  <button type="submit" id="start" value=""  onclick="window.location.href='<?= BASE_URL ?>public/index.php?url=router/beggin'" >Começar</button>
	</div>

  <div id="cookie-footer">
    <p>
        Este site usa cookies para melhorar sua experiência. Ao continuar navegando, você concorda com o uso de cookies. 
        <a href="<?= BASE_URL ?>public/index.php?url=router/termUse1" style="color: white; text-decoration: underline;">Saiba mais</a>
    </p>
    <button id="accept-button">Aceitar</button>
</div>

</div>	
	</div>
	</div>
    <script src="<?= BASE_URL ?>public/assets/js/cookies.js"></script>
    <script src="<?= BASE_URL ?>public/assets/js/index.js"></script>
    <script src="<?= BASE_URL ?>public/assets/js/menu.js"></script>
    <?php
if(isset($_POST['accept_cookies'])) {
    setcookie("user_accepts_cookies", "true", time() + (8), "/"); // Cookie válido por 30 dias
}
?>
</body>
</html>