<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termos de Uso</title>
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
    <button class="nav-button" id="backButton" onclick="window.location.href='<?= BASE_URL ?>public/index.php?url=router/termUse1'">Voltar</button>
    <span class="page-info" id="pageInfo">Página 2 de 3</span>
    <button class="nav-button" id="forwardButton" onclick="window.location.href='<?= BASE_URL ?>public/index.php?url=router/termUse3'">Avançar</button>
  </div>

  <br>
  <div class="title3"><b><li>Capítulo 3 - Condições de Acesso</li></b></div>
  <div class="text">3.1. O acesso ao website da Ecoquiz é, em geral, gratuito e não exige inscrição prévia ou registro.</div>
  <div class="text">3.2. No entanto, para usufruir de algumas funcionalidades, o usuário poderá ser solicitado a criar uma conta, com login e senha exclusivos.</div>
  <div class="text">3.3. É de responsabilidade do usuário fornecer informações corretas, autênticas, válidas, completas e atualizadas. Além disso, o usuário deve manter a confidencialidade do seu login e senha, não os divulgando a terceiros.</div>
  <div class="text">3.4. Algumas seções deste website permitem que o usuário publique comentários. Ecoquiz não tolera publicações discriminatórias, ofensivas, ilícitas ou que infrinjam direitos autorais ou outros direitos de terceiros.</div>
  <div class="text">3.5. A publicação de conteúdos pelo usuário, incluindo, mas não se limitando a mensagens e comentários, concede à Ecoquiz uma licença não-exclusiva, irrevogável e irretratável para utilizar, reproduzir e publicar esse conteúdo em seu website, plataformas e aplicativos, sem qualquer restrição ou limitação.</div>
  <br>
  <br>
  <div class="title3"><b><li>Capítulo 4 - Cookies</li></b></div>
  <div class="text">4.1. Cookies são informações armazenadas no computador ou dispositivo utilizado pelo usuário. Esses cookies coletam dados como o tipo de navegador, tempo de navegação, páginas visitadas, preferências de idioma e outros dados de tráfego anônimos.</div>
  <div class="text">4.2. Nós e nossos prestadores de serviços utilizamos cookies para melhorar a segurança, facilitar a navegação, exibir informações de forma mais eficiente, personalizar sua experiência e realizar rastreamento online.</div>
  <div class="text">4.3. Também coletamos informações estatísticas para aprimorar o design e a funcionalidade do website, para entender como ele é utilizado e para resolver problemas relacionados.</div>
  <div class="text">4.4. Caso o usuário não concorde com o uso de cookies, ele pode configurar o navegador para rejeitá-los ou permitir a escolha de aceitar ou rejeitar cookies específicos. No entanto, é importante observar que a desativação dos cookies pode afetar a experiência de navegação.</div>
  <div class="text">4.5. A Ecoquiz não se responsabiliza pelos efeitos negativos na experiência de navegação causados pela desativação dos cookies.</div>


  <script src="<?= BASE_URL ?>public/assets/js/termosdeuso.js"></script>
  <script src="<?= BASE_URL ?>public/assets/js/menu.js"></script>

</body>
</html>