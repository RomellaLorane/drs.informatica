<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/contato.css">
</head>
<body>
    <div id="img-fundo">
	<div id="corpo-cortina">
	
            <!--Inclui o header-->
	  <?php include_once 'header_view.php';?>
      
            <div id="corpo-real">
                <h1 class="titulo">Contato</h1>
                <img id="img-contato" src="<?= BASE_URL ?>public/assets/img/img-contato.png" alt="">
                <p style="max-width: 400px;">Em caso de dúvidas ou para fornecer um feedback em relação
                    ao quiz e ao site, entre em contato com os meios fornecidos
                    abaixo:
                </p>
                <div id="card-contato">
                    <div id="contato"> Website: www.EcoQuiz.com.</div>
                    <div id="contato"> E-mail: EcoQuiz@gmail.com</div>
                    <div id="contato" >Telefone: +55 (10) 0800-301</div>
                </div>
            </div>

        </div>
    </div>
    <script src="<?= BASE_URL ?>public/assets/js/menu.js"></script>
</body>
</html>