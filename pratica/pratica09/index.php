<?php
  $roleta = rand(1, 100);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerador de números aleatório</title>
  </head>
  <body>
    <div id="campo">
      <h1>Gerar número</h1>
      <p id="res">
        <?php
          $gerarNumero = rand(1, 100);
          echo("$gerarNumero");
        ?>
      </p>
      <form action="#res" method="get">
        <button id="btnGerarNumero">Clique</button>
      </form>
    </div>
  </body>
</html>