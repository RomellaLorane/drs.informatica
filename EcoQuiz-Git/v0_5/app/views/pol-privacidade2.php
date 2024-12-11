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
    <button class="nav-button" id="backButton" onclick="window.location.href='<?= BASE_URL ?>public/index.php?url=router/privacy'">Voltar</button>
    <span class="page-info" id="pageInfo">Página 2 de 7</span>
    <button class="nav-button" id="forwardButton" onclick="window.location.href='<?= BASE_URL ?>public/index.php?url=router/privacy3'">Avançar</button>
  </div>

  <br>
  <br>
  <div class="title2"><b>4. Sites Externos</b></div>
  <div class="text">Nosso site pode conter links para sites externos que não são operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e as práticas desses sites, e não podemos aceitar responsabilidade por suas políticas de privacidade.</div>
  <br>
  <br>
  <div class="title2"><b>5. Recusa de Coleta de Dados</b></div>
  <div class="text">Você é livre para recusar a nossa solicitação de informações pessoais, ciente de que, nesse caso, talvez não possamos fornecer alguns dos serviços desejados.</div>
  <br>
  <br>
  <div class="title2"><b>6. Aceitação das Práticas de Privacidade</b></div>
  <div class="text">O uso contínuo de nosso site será considerado como aceitação de nossas práticas de privacidade e de manejo de informações pessoais. Se você tiver dúvidas sobre como lidamos com dados do usuário, entre em contato conosco.</div>
  <br>
  <br>
  <div class="title2"><b>7. Segurança e Confiança do Site Ecoquiz</b></div>
  <div class="text">O site é confiável e seguro para navegação, conforme indicado pela Verificação de Segurança. A página verifica as informações do site para identificar possíveis problemas de segurança. A navegação verificada pela ferramenta de segurança do Google mostra que o site é seguro.</div>
  
  <script src="<?= BASE_URL ?>public/assets/js/pol-privacidade.js"></script>
  <script src="<?= BASE_URL ?>public/assets/js/menu.js"></script>
</body>
</html>