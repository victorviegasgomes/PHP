<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <script src="js/index.js"></script>
  <title>pratica11</title>
</head>
<body>
	<h1>Analizador de números</h1>
	<?php
	  $numero = $_POST["num"];
	  echo("analizando o número <strong>$numero</strong> informado pelo usuário! <br>");
	  
	  $int = (int) $numero;
	  $real = $numero - $int;
	  
	  print("parte inteira do número: $int <br>");
	  print("parte fracionaria do número: $real <br>");
  ?>
</body>
</html>