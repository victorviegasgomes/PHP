<?php

$host = "127.0.0.1";
$user = "root";
$pass = "victor";
$banco = "cadastro";

$connect = new mysqli($host, $user, $pass, $banco);

if($connect -> connect_error) {
  echo("falha ao conectar!");
}else {
  echo("conexão bem sucedida!");
}
//mysql_select_db("cadastro", $connect);

#registros para o banco de dados
$registro1 = "insert into alunos(numero, nome, turma, turno) values
('1', 'Victor', 'INF10AM', 'manhã')";
$registro2 = "insert into alunos(numero, nome, turma, turno) values
('2', 'Geovani', 'INF10AM', 'manhã')";
$registro3 = "insert into alunos(numero, nome, turma, turno) values
('3', 'Igor', '9AM', 'manhã')";
$registro4 = "insert into alunos(numero, nome, turma, turno) values
('4', 'Tatiana', 'undefined', 'tarde')";
$registro5 = "insert into alunos(numero, nome, turma, turno) values
('5', 'Bel', 'undefined', 'tarde')";
#fim dos registros
$connect -> query($registro2) or die("erro no cadastro");
$connect -> query($registro3) or die("erro no cadastro");
$connect -> query($registro4) or die("erro no cadastro");
$connect -> query($registro5) or die("erro no cadastro");
#fim das queries
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>