<?php

session_start();
$erros = isset($_SESSION['erros']) ? $_SESSION['erros'] : 0;
$acertos = isset($_SESSION['acertos']) ? $_SESSION['acertos'] : 0;

$resposta = $_POST['resposta'];

if ($resposta === 'B') {
    $_SESSION['acertos'] = isset($acertos) ? $_SESSION['acertos'] + 1 : 1;
} else {
    $_SESSION['erros'] = isset($erros) ? $_SESSION['erros'] + 1 : 1;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="assets/css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
</head>
<body>
    
    <form action="resultado.php" method="post">
            <div class="container">
                <section class="quiz-section">
                    <div class="quiz-box">
                    <h1 style="margin-top: -6px;"><img class="logo" width="6%" style="margin-top:12px" src="assets/imagem/pngegg.png">  PokeQuiz</h1>
                        <div class="quiz-header">
                            <span>DIEGO OLEGARIO E CAIO PINHEIRO</span>
                        </div>
                        <h2 class="question-text">10. Qual Pokémon é conhecido como o guardião dos céus?</h2>
                        
                        <div class="option-list">
                            <div class="option">
                                <input type="radio" id="respostaA" name="resposta" value="A">
                                <label for="respostaA"><span>A. Articuno</span></label>
                            </div>
                            <div class="option">
                                <input type="radio" id="respostaB" name="resposta" value="B">
                                <label for="respostaB"><span>B. Zaptos</span></label>
                            </div>
                            <div class="option">
                                <input type="radio" id="respostaC" name="resposta" value="C">
                                <label for="respostaC"><span>C. Lugia</span></label>
                            </div>
                            <div class="option">
                                <input type="radio" id="respostaD" name="resposta" value="D">
                                <label for="respostaD"><span>D. Rayquaza</span></label>
                            </div>
                        </div>
                        
                        <div class="quiz-footer">
                            <span class="question-total">10 de 10 questões</span>
                            <button type="submit" class="next-btn">Próximo</button>

                        </div>
                </section>
            </div>
    </form>
    <script src="js/script.js"></script>
    <script src="js/questions.js"></script>
</body>
</html>

