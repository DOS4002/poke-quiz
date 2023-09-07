<?php
session_start();

$_SESSION['acertos'] = 0;  // Inicializa os acertos
$_SESSION['erros'] = 0;    // Inicializa os erros

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="assets/css/styles.css">
 
</head>
<body>
    
    <form action="pag2.php" method="post">
            <div class="container">
                <section class="quiz-section">
                    <div class="quiz-box">
                        <h1 style="margin-top: -6px;"><img class="logo" width="6%" style="margin-top:12px" src="assets/imagem/pngegg.png">  PokeQuiz</h1>
                        <div class="quiz-header">
                            <span>DIEGO OLEGARIO E CAIO PINHEIRO</span>
                        </div>
                        <h2 class="question-text">1. Qual Pokémon usa este elemento <img class="raio-icon" src="assets/imagem/raio pikachu png - Download grátis.png" alt="Ícone"> ?</h2>
                        
                        <div class="option-list">
                            <div class="option">
                                <input type="radio" id="respostaA" name="resposta" value='A'>
                                <label for="respostaA"><span>A. Pikachu</span> </label>
                            </div>
                            <div class="option">
                                <input type="radio" id="respostaB" name="resposta" value='B'>
                                <label for="respostaB"><span>B. Eve</span></label>
                            </div>
                            <div class="option">
                                <input type="radio" id="respostaC" name="resposta" value='C'>
                                <label for="respostaC"><span>C. Blastoise</span></label>
                            </div>
                            <div class="option">
                                <input type="radio" id="respostaD" name="resposta" value='D'>
                                <label for="respostaD"><span>D. Charmander</span></label>
                            </div>
                        </div>
                        
                        <div class="quiz-footer">
                            <span class="question-total">1 de 10 questões</span>
                            <button type="submit" class="next-btn">Próximo</button>
                        </div>
                </section>
            </div>
    </form>
    <script src="js/script.js"></script>
</body>
</html>
