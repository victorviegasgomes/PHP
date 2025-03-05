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
        <p>a soma de A e B é: <?php echo $soma?></p>
        <h2>operador -(menos)</h2>
        <p>a subtração de A e B é: <?php echo $subtracao ?></p>
        <h2>operador /(divisão)</h2>
        <p>a divisão de A e B é: <?php echo $divisao ?></p>
        <h2>operador %(resto de divisão)</h2>
        <p>o resto da divisão de A e B é: <?php echo $resto ?></p>
        <h2>operador *(multiplicação)</h2>
        <p>a multiplicação de A e B é: <?php echo $multiplicacao ?></p>
    </body>
</html>