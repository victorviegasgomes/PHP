<?php
$nome = $_GET["nome"];
$senha = $_GET["senha"];
$sexo = $_GET["genero"];
$turno = $_GET["turno"];
$cidade = $_GET["cidade"];
echo("<h1>Os dados recebidos são: </h1> <br> <hr>");
echo("
<table width='400' border='1' cellspacing='0' cellpadding='1'>
  <tr>
    <td>nome</td>
    <td>$nome</td>
  </tr>
  <tr>
    <td>senha</td>
    <td>$senha</td>
  </tr>
  <tr>
    <td>sexo</td>
    <td>$sexo</td>
  </tr>
  <tr>
    <td>turno</td>
    <td>$turno</td>
  </tr>
  <tr>
    <td>cidade</td>
    <td>$cidade</td>
  </tr>
</table>
")
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <a style="text-decoration=none" href="index.php">clique para voltar</a>
</body>