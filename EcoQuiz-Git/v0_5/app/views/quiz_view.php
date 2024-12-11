<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assets/css/quiz.css">
</head>
<body>
    <div id="img-fundo">
        <div id="corpo-cortina">
            <?php include_once 'header_view.php'; ?>

            <div id="corpo-real">
                <form class="quiz-container" method="POST">
                    <div class="quiz-header">
                        <div class="question-number"><?= $_SESSION['pergunta_index'] + 1; ?></div>
                        <img id="logo-quiz" src="<?= BASE_URL ?>public/assets/img/logo-questions.png" alt="logo quiz"/>
                    </div>
                    <h2 class="question"><?= htmlspecialchars($quizData['pergunta']['texto']); ?></h2>
                    <div class="options">
                        <?php foreach ($quizData['opcoes'] as $opcao): ?>
                            <div class="option">
                                <input
                                    type="radio"
                                    name="resposta"
                                    id="opcao_<?= $opcao['opcao_id']; ?>"
                                    value="<?= $opcao['opcao_id']; ?>"
                                    <?= $quizData['respostaSelecionada'] == $opcao['opcao_id'] ? 'checked' : ''; ?>
                                >
                                <label for="opcao_<?= $opcao['opcao_id']; ?>"><?= htmlspecialchars($opcao['texto']); ?></label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="navigation-buttons">
                        <?php if ($_SESSION['pergunta_index'] > 0): ?>
                            <button type="submit" name="voltar" class="btn voltar">Voltar</button>
                        <?php endif; ?>
                        <button type="submit" name="proxima" class="btn proxima">
                            <?= ($_SESSION['pergunta_index'] + 1 < count($quizData['perguntas'])) ? 'Próxima' : 'Finalizar'; ?>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="<?= BASE_URL ?>public/assets/js/menu.js"></script>
</body>
</html>
