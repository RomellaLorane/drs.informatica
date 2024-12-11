<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política de Privacidade</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/privacidade.css">
    
</head>
<body>
    <div id="img-fundo">
	<div id="corpo-cortina">
	      <!--Inclui o header-->
        <?php include_once 'header_view.php';?>

  <div id="corpo-real">

  <div class="navigation-buttons">

    <span class="page-info" id="pageInfo">Página 1 de 7</span>
    <button class="nav-button" id="forwardButton" onclick="window.location.href='<?= BASE_URL ?>public/index.php?url=router/privacy2'">Avançar</button>
  </div>

  <div class="title1"><B>Política de Privacidade</B></div>

  <div class="text"><p>A sua privacidade é importante para nós. É política do Ecoquiz respeitar a sua privacidade em relação a qualquer informação pessoal que possamos coletar no site Ecoquiz e em outros sites que possuímos e operamos.</div>
  <br>
  <div class="title2"><b>1. Coleta de Informações Pessoais</b></div>

  <div class="text">Solicitamos informações pessoais apenas quando realmente precisamos delas para fornecer um serviço. Fazemos isso de maneira justa e legal, com o seu conhecimento e consentimento. Informamos também o motivo pelo qual estamos coletando essas informações e como elas serão utilizadas.</div>
  <br>
  <br>
  <div class="title2"><b>2. Armazenamento e Proteção de Dados</b></div>

  <div class="text">Retemos as informações coletadas pelo tempo necessário para fornecer o serviço solicitado. Quando armazenamos dados, tomamos medidas comercialmente aceitáveis para protegê-los contra perdas, roubos, acessos não autorizados, divulgações, cópias, usos ou modificações indevidas.</div>
  <br>
  <br>
  <div class="title2"><b>3. Compartilhamento de Informações</b></div>

  <div class="text">Não compartilhamos informações de identificação pessoal publicamente nem com terceiros, exceto quando exigido por lei.</div>
  <br>
  <br>
  <div class="title2"><b>4. Sites Externos</b></div>
  <div class="text">Nosso site pode conter links para sites externos que não são operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e as práticas desses sites, e não podemos aceitar responsabilidade por suas políticas de privacidade.</div>

  <script src="<?= BASE_URL ?>public/assets/js/pol-privacidade.js"></script>
  <script src="<?= BASE_URL ?>public/assets/js/menu.js"></script>
</body>
</html>