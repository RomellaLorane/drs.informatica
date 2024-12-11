<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatar Equipe</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/contatar-equipe.css">
</head>
<body>
    <div id="img-fundo">
	<div id="corpo-cortina">

    <!--Inclui o header-->
	  <?php include_once 'header_view.php';?>
    	<div id="corpo-real">

            <div class="container">
                <div class="form-box">
                  <img div id="logo-card" src="<?= BASE_URL ?>public/assets/img/logo-questions.png"></img>
                  <form>
                    <div class="input-group">
                      <label for="fullname"><i class="icon"></i> Nome Completo</label>
                      <input type="text" id="fullname" placeholder="José da Silva Santos" required>
                    </div>
                    <div class="input-group">
                      <label for="email"><i class="icon"></i> Email</label>
                      <input type="email" id="email" placeholder="meuemail@gmail.com" required>
                    </div>
                    <div class="input-group">
                      <label for="assunto"><i class="icon"></i> Assunto</label>
                      <input type="text" id="assunto" placeholder="Dúvida sobre o Quiz" required>
                    </div>
                    <div class="input-group">
                      <label for="mensagem"><i class="icon"></i> Mensagem</label>
                      <textarea id="mensagem" placeholder="Eu gostaria que adicionassem..." rows="4" required></textarea>
                    </div>
                    <button type="submit">ENVIAR</button>
                  </form>
                  <footer>
                    <p>&copy; Todos os direitos reservados ao EcoQuiz 2024</p>
                  </footer>
                </div>
</div>

<script src="<?= BASE_URL ?>public/assets/js/menu.js"></script>

</body>
</html>            
           