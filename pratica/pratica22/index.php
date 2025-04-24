<?php
escreva("somando dois números: <br>");
echo("resultado da soma: ".soma(3, 8));

function escreva($texto) {
  echo($texto);
}
function soma($num1, $num2) {
  return $num1 + $num2;
}
?>