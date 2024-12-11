<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/intro.css">
</head>
<body>
    <div id="img-fundo">
	<div id="corpo-cortina">
        <!--Inclui o header-->
	    <?php include_once 'header_view.php';?>

            <div id="corpo-real">
        
                <div class="container">
                    <div class="content">
                        <h1>Bem-vindo(a) ao EcoQuiz!</h1>
                        <p style="max-width: 500px;">Aqui você poderá explorar e expandir seus conhecimentos sobre práticas sustentáveis e os Objetivos de Desenvolvimento Sustentável (ODS), promovidos pela ONU para transformar nosso planeta. Ao responder cada pergunta, você aprenderá como pequenas ações podem fazer uma grande diferença e ajudará a construir um mundo mais justo e sustentável. Está pronto(a) para esse desafio? Vamos juntos nessa jornada pelo futuro do planeta!</p>
                    </div>

                    <div id="card-button">
                        <button id="ONU" type="submit" onclick="window.location.href='https://brasil.un.org/pt-br/sdgs' ">Visite o site da ONU</button> <br>
                        <button id="ONU" type="submit" onclick="window.location.href='/EcoQuiz-Git/v0_5/public/index.php?url=hub/showHub'">Continuar</button>
                    </div>
                    
                    <div class="footer">
                        © Todos os direitos reservados ao EcoQuiz 2024
                    </div>
                    <img id="img-intro" src="<?= BASE_URL ?>public/assets/img/intro.jpg" alt="Img-intro">
                </div>
                </div>
    
            </div>	
        </div>
    </div>

    <script src="<?= BASE_URL ?>public/assets/js/menu.js"></script>
</body>
</html>