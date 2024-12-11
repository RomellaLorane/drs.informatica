<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agradecimento</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/agradecimento.css">
</head>
<body>
    <div id="img-fundo">
	<div id="corpo-cortina">
	
      <!--Inclui o header-->
      <?php include_once 'header_view.php';?>

    	<div id="corpo-real">

        <div class="title-obg"><b>OBRIGADO</b></div>
        <div class="text-obg">POR PARTICIPAR</div>
        <br>

        <img id="img-obg" src="<?= BASE_URL ?>public/assets/img/agradecimento.jpeg" alt="Img-agradecimento">
        
        <button onclick="window.location.href='<?= BASE_URL ?>public/index.php?url=router/start'" class="botao-obg" target="_blank">Voltar ao Início</button>

        <div class="footer">
            © Todos os direitos reservados ao EcoQuiz 2024
        </div>

    </div>	
    </div>
    </div>

<script src="<?= BASE_URL ?>public/assets/js/menu.js"></script>

</body>
</html>