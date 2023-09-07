<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Resultado</title>
  <link rel="stylesheet" href="assets/css/final.css">

</head>
<body>


<?php
session_start();

$acertos = isset($_SESSION['acertos']) ? $_SESSION['acertos'] : 0;
$erros = isset($_SESSION['erros']) ? $_SESSION['erros'] : 0;

$resposta = $_POST['resposta'];

if ($resposta === 'D') {
    $_SESSION['acertos'] = isset($acertos) ? $_SESSION['acertos'] + 1 : 1;
} else {
    $_SESSION['erros'] = isset($erros) ? $_SESSION['erros'] + 1 : 1;
}

$totalAcertos = $acertos + ($_SESSION['acertos'] - $acertos); // Calcula o total de acertos
$totalErros = $erros + ($_SESSION['erros'] - $erros);

$porcAcertos = ($totalAcertos * (100/ ( $totalAcertos + $totalErros)));

unset($_SESSION['acertos']);
unset($_SESSION['erros']);

$fraseArray = ["PARABÉNS! Você está para ser um treinador pokémon!",
            "Muito bom! Não desista e busque sempre conhecimento, você será um grande treinador.",
            "Realmente, o resultado não foi muito legal, mas não desista, você tem outras chances!",
            "Você realmente leu o Guia Pokémon?"
];

if ($totalAcertos == 10) {
    $frase = $fraseArray[0];
} else if($totalAcertos >= 7 && $totalAcertos < 10){
    $frase = $fraseArray[1];
} else if ($totalAcertos <= 6 && $totalAcertos >= 4){
    $frase = $fraseArray[2];
} else if ($totalAcertos <= 3 && $totalAcertos >= 1){
    $frase = $fraseArray[3];
} else if ($totalAcertos == 0) { 
    $frase = $fraseArray[3];
}


?>

<section>
    <img src="https://i.pinimg.com/originals/93/98/94/9398944b931f51d4ab0a8e92f44ca452.jpg" id="mountains_behind">
    <form action="php/resposta.php" method="post">
        <div class="container">
            <section class="quiz-section">
                <div class="quiz-box">
                    <div class="quiz-header">
                        <span>DIEGO OLEGARIO E CAIO PINHEIRO</span>
                    </div>
                    <h2 class="text">Resultado</h2>
                    <h4 class="text">Você acertou <?php echo $porcAcertos?>% das questões.</h4>
                    <div class="resultado">
                        <span class="acertos">Acertos: <?php echo $totalAcertos?> </span>
                        <br>
                        <span class="erros">Erros: <?php echo $totalErros?> </span>
                    </div>

        
                    <div class="quiz-footer">
                        <span class="question-total"><?php echo $frase ?></span>
                    </div>
            </section>
        </div>
    </form>
</section>

</body>
</html>
