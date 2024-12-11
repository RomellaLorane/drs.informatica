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
    <button class="nav-button" id="backButton" onclick="window.location.href='<?= BASE_URL ?>public/index.php?url=router/privacy3'">Voltar</button>
    <span class="page-info" id="pageInfo">Página 4 de 7</span>
    <button class="nav-button" id="forwardButton" onclick="window.location.href='<?= BASE_URL ?>public/index.php?url=router/privacy5'">Avançar</button>
  </div>

  <br>
  <br>
  <div class="title2"><b>9. Tipos de Cookies que Usamos</b></div>
  <br>
  <div class="title3"><li><b>Cookies Relacionados à Conta</b></li></div>
  <div class="text">Se você criar uma conta conosco, usaremos cookies para gerenciar o processo de inscrição e a administração geral. Esses cookies geralmente são excluídos quando você sai da conta, mas em alguns casos, podem permanecer para lembrar suas preferências ao sair.</div>
  <br>
  <br>
  <div class="title3"><li><b>Cookies Relacionados ao Login</b></li></div>
  <div class="text">Usamos cookies para lembrar o seu login, evitando que você precise se autenticar sempre que visitar uma nova página. Esses cookies são removidos quando você faz logout.</div>
  <br>
  <br>
  <div class="title3"><li><b>Cookies Relacionados a Boletins por E-mail</b></li></div>
  <div class="text">Se você assina nosso boletim informativo, podemos usar cookies para lembrar se você está registrado e para exibir notificações apropriadas apenas para usuários inscritos.</div>
  <br>
  <br>
  <div class="title3"><li><b>Cookies Relacionados a Pedidos de Comércio Eletrônico</b></li></div>
  <div class="text">Este site oferece facilidades de comércio eletrônico. Alguns cookies são essenciais para garantir que seu pedido seja lembrado entre as páginas e processado corretamente.</div>


  <script src="<?= BASE_URL ?>public/assets/js/pol-privacidade.js"></script>
  <script src="<?= BASE_URL ?>public/assets/js/menu.js"></script>
</body>
</html>