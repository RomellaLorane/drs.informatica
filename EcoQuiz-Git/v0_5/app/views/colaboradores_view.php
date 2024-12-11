<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colaboradores</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/colaboradores.css">
</head>
<body>
    <div id="img-fundo">
	<div id="corpo-cortina">
	
      <!--Inclui o header-->
      <?php include_once 'header_view.php';?>


    	<div id="corpo-real">
            <div class="title-colab"><b>Colaboradores</b></div>
            <div class="text-colab">Agradecimento às instituições que colaboram com a ideia do site, <br>tornando possível o quiz e cumprindo o objetivo inicial da nossa equipe.</div>
            <img id="img-colaboradores" src="<?= BASE_URL ?>public/assets/img/colaboradores.jpeg" alt="img-colaboradores">
        </div>

    </div>	
</div>
</div>

<script src="<?= BASE_URL ?>public/assets/js/menu.js"></script>

</body>
</html>