<?php
    $valorA = 2;
    $valorB = 3;
    $soma = $valorA + $valorB;
    $subtracao = $valorA - $valorB;
    $divisao = $valorA / $valorB;
    $multiplicacao = $valorA * $valorB;
    $resto = $valorA % $valorB;
?>
<html>
    <head
        <title>operadores com php</title>
        <meta charset=" utf-8">
    </head>
    <body>
        <h1>usando operadores com php.</h1>
        <p>OBS: a = 2, b = 3</p>
        <h2>operador +(mais)</h2>
        <p>a soma de A e B �: <?php echo $soma?></p>
        <h2>operador -(menos)</h2>
        <p>a subtra��o de A e B �: <?php echo $subtracao ?></p>
        <h2>operador /(divis�o)</h2>
        <p>a divis�o de A e B �: <?php echo $divisao ?></p>
        <h2>operador %(resto de divis�o)</h2>
        <p>o resto da divis�o de A e B �: <?php echo $resto ?></p>
        <h2>operador *(multiplica��o)</h2>
        <p>a multiplica��o de A e B �: <?php echo $multiplicacao ?></p>
    </body>
</html>