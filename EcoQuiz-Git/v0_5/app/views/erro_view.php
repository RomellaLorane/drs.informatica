<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/erro.css">
</head>
<body>
    <div id="img-fundo">
	<div id="corpo-cortina">
	
      <!--Inclui o header-->
      <?php include_once 'header_view.php';?>

    	<div id="corpo-real">

        <img id="img-erro" src="<?= BASE_URL ?>public/assets/img/erro.png" alt="Img-erro">
        <div class="card-erro">
            <h1>Oops!</h1>
            <h3>Algo deu errado,            <?php   echo "<h1>Erro $codigo</h1>";
              echo "<h3>$mensagem";
          ?> <br> tente novamente</h3>
            <a href="inicio.html" id="refresh-btn" target="_blank">Voltar ao Início</a>
        </div>
    </div>	
</div>
</div>

<script src="<?= BASE_URL ?>public/assets/js/menu.js"></script>

</body>
</html>