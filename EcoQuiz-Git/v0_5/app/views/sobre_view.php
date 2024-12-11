<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipe</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/sobre.css">
</head>
<body>
    <div id="img-fundo">
	<div id="corpo-cortina">
	
        <!--Inclui o header-->
	  <?php include_once 'header_view.php';?>

    	<div id="corpo-real">

            <section class="equipe">
                <div class="conteudo">
                    <div class="texto">
                        <h1 style="font-size: 60px;">Conheça nossa equipe</h1>
                        <p style="font-size: 20px;">A equipe do EcoQuiz é formada por alunos que desenvolveram um quiz interativo para promover o conhecimento sobre sustentabilidade e os ODS.</p>
                    </div>
                </div>
                <div class="cards">
                    <div class="card">
                        <img src="<?= BASE_URL ?>public/assets/img/Arthut-Gama.jpeg" alt="Jovem homem branco com um semblante feliz, cabelos castanhos encaracolados e de camisa amarela">
                        <div class="caixa-texto">Arthur Gama</div>
                    </div>
                    <div class="card">
                        <img src="<?= BASE_URL ?>public/assets/img/Fernando-Alonso.jpeg" alt="Jovem homem de pele clara, cabelos negros e cacheados, sorrindo">
                        <div class="caixa-texto">Fernando Alonso</div>
                    </div>
                    <div class="card">
                        <img src="<?= BASE_URL ?>public/assets/img/Rafael-Senger.jpeg" alt="Jovem com cabelo curto, escuro e ligeiramente bagunçado. Ele tem sobrancelhas marcantes, olhos escuros e está olhando diretamente para a câmera com uma expressão neutra. A pele é clara, e ele veste um casaco verde com capuz. O fundo da imagem parece ser um ambiente interno, com iluminação suave e detalhes desfocados.">
                        <div class="caixa-texto">Rafael Senger</div>
                    </div>
                    <div class="card">
                        <img src="<?= BASE_URL ?>public/assets/img/Romella-Lorane.jpg" alt="Jovem com pele clara, cabelos lisos e castanhos que caem sobre os ombros. Ela tem olhos claros, sobrancelhas bem definidas e um sorriso discreto. Está vestindo uma blusa de cor rosa vibrante, e o fundo parece ser o interior de uma casa, com uma parede branca e uma porta visível ao lado direito da foto. A iluminação é suave, destacando seu rosto">
                        <div class="caixa-texto">Romella Lorane</div>
                    </div>
                    <div class="card">
                        <img src="<?= BASE_URL ?>public/assets/img/Sandrielly-Julia.jpg" alt="Jovem de pele clara e cabelos cacheados e volumosos, de tonalidade castanha escura. Ela tem uma expressão neutra e está vestindo uma camiseta branca com estampas azuis. O fundo parece ser uma área externa coberta, com vigas de madeira e telhas visíveis no teto. Há uma rede pendurada em um dos cantos e uma parede feita de materiais naturais, como palha ou bambu. A iluminação vem do lado esquerdo, provavelmente da luz do sol, criando um brilho suave ao redor dos cabelos.">
                        <div class="caixa-texto">Sandrielly Júlia</div>
                    </div>
                </div>
                
                </div>
            </section>

        </div>
    </div>
    <script src="<?= BASE_URL ?>public/assets/js/menu.js"></script>
</body>
</html>