<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hub de Quizzes</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/colaboradores.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/style.css">
</head>
<body>
    <div id="img-fundo">
	<div id="corpo-cortina">
	
      <!--Inclui o header-->
      <?php include_once 'header_view.php';?>

    <div class="cards-container">
        <?php if (!empty($quizzes)): ?>
            <?php foreach ($quizzes as $item): ?>
                <form method="POST" class="card">
                    <img src="<?= htmlspecialchars($item['imagem'] ?: '../public/assets/img/default.jpg'); ?>" alt="Imagem do Card">
                    <h2><?= htmlspecialchars($item['nome']); ?></h2>
                    <p><?= htmlspecialchars($item['descricao']); ?></p>
                    <button name="quiz_id" value="<?= htmlspecialchars($item['quiz_id']); ?>">Iniciar</button>
                </form>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Nenhum quiz disponível no momento.</p>
        <?php endif; ?>
    </div>
    <?php // include __DIR__ . '/../partials/footer.php'; ?>

    </div>
    <script src="<?= BASE_URL ?>public/assets/js/menu.js"></script>
</body>
</html>
