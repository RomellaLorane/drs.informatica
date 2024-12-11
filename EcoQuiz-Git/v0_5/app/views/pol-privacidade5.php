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
    <button class="nav-button" id="backButton" oonclick="window.location.href='<?= BASE_URL ?>public/index.php?url=router/privacy4'">Voltar</button>
    <span class="page-info" id="pageInfo">Página 5 de 7</span>
    <button class="nav-button" id="forwardButton" onclick="window.location.href='<?= BASE_URL ?>public/index.php?url=router/privacy6'">Avançar</button>
  </div>

  <br>
  <br>
  <div class="title3"><li><b>Cookies Relacionados a Pesquisas</b></li></div>
  <div class="text">Periodicamente, oferecemos pesquisas e questionários. Esses cookies ajudam a lembrar quem já participou em uma pesquisa ou fornecem resultados precisos após alterações nas páginas.</div>
  <br>
  <br>
  <div class="title3"><li><b>Cookies Relacionados a Formulários</b></li></div>
  <div class="text">Quando você envia dados através de formulários (como os encontrados nas páginas de contato ou nos formulários de comentários), os cookies podem ser configurados para lembrar seus dados para futuras interações.</div>
  <br>
  <br>
  <div class="title3"><li><b>Cookies de Preferências do Site</b></li></div>
  <div class="text">Para proporcionar uma boa experiência, usamos cookies para lembrar suas preferências de como o site deve se comportar quando você o utiliza.</div>
  <br>
  <br>
  <div class="title2"><b>10. Cookies de Terceiros</b></div>
  <br>
  <br>
  <div class="title3"><li><b>Google Analytics</b></li></div>
  <div class="text">Este site usa o Google Analytics, uma ferramenta de análise amplamente utilizada, para entender como você usa o site e como podemos melhorar sua experiência. Esses cookies podem rastrear, por exemplo, o tempo que você passa no site e as páginas visitadas. Para mais informações, consulte a página oficial do Google Analytics.</div>
  
  <script src="<?= BASE_URL ?>public/assets/js/pol-privacidade.js"></script>
  <script src="<?= BASE_URL ?>public/assets/js/menu.js"></script>
</body>
</html>