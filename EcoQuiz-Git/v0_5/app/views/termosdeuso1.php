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
    <span class="page-info" id="pageInfo">Página 1 de 3</span>
    <button class="nav-button" id="forwardButton" onclick="window.location.href='<?= BASE_URL ?>public/index.php?url=router/termUse2'">Avançar</button>
  </div>

  <div class="title1"><b>Termos de Uso</b></div>
  <br>
  <div class="text">Ecoquiz, pessoa jurídica de direito privado, descreve, por meio deste documento, sua política de uso do site https://ecoquiz.com e de qualquer outro site, loja ou aplicativo operado pelo proprietário.</div>
  <br>
  <br>
  <civ class="title2"><b>1. Aceitação dos Termos de Uso</b></civ>

  <div class="text">Ao navegar neste website, você concorda automaticamente com nossa política. Caso não concorde, orientamos que suspenda a navegação no site e evite concluir o seu cadastro. A política poderá ser alterada a qualquer momento. Caso isso aconteça, publicaremos a versão atualizada no website, com a data da revisão. Se as alterações forem substanciais, além de publicarmos no site, também entraremos em contato com você, utilizando as informações de contato presentes em nosso cadastro ou por meio de notificações. O uso contínuo deste site após alterações indica que você aceita os novos termos. Caso não concorde com a versão revisada, pedimos que encerre o seu acesso ao site.</div>
  <br>
  <br>
  <div class="title3"><b><li>Capítulo 1 - Usuário</li></b></div>
  <div class="text">1.1. A utilização deste website atribui automaticamente a condição de usuário e implica a plena aceitação de todas as diretrizes e condições descritas nestes Termos de Uso.</div>
  <br>
  <br>
  <div class="title3"><b><li>Capítulo 2 - Adesão à Política de Privacidade</li></b></div>
  <div class="text">2.1. A utilização deste website implica a adesão à Política de Uso e à versão mais atualizada da Política de Privacidade do Ecoquiz.</div>

</body>
<script src="<?= BASE_URL ?>public/assets/js/termosdeuso.js"></script>
<script src="<?= BASE_URL ?>public/assets/js/menu.js"></script>
</html>