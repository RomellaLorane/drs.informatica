<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pontuação</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/pontuacao.css">
</head>
<body>
    <div id="img-fundo">
	<div id="corpo-cortina">
		
      <!--Inclui o header-->
      <?php include_once 'header_view.php';?>
    	<div id="corpo-real">
     
        <div class="container">
          <h1>Pontuação</h1>
          <div class="pontuacao">
              <div class="box">
                  <h2>Acertos</h2>
                  <p><?= $resultado['acertos']; ?> (<?= $resultado['porcentagemAcertos']; ?>%)</p>
              </div>
              <div class="box">
                  <h2>Erros</h2>
                  <p> <?= $resultado['erros']; ?> (<?= $resultado['porcentagemErros']; ?>%)</p>
              </div>
          </div>
          <div class="imagem">
              <img src="<?= BASE_URL ?>public/assets/img/pontuacao.jpeg" alt="Paisagem com montanha">
          </div>
          <div class="finalizar">
              <button type="submit" onclick="window.location.href='<?= BASE_URL ?>public/index.php?url=router/thanks'" class="botao"><b>Finalizar</b></button>
          </div>
      </div>

<script src="<?= BASE_URL ?>public/assets/js/menu.js"></script>

</body>
</html>
