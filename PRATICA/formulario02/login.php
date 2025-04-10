<?php
$valid_user = "admin";
$valid_pass = "12345";

if ($_POST['username'] == $valid_user && $_POST['password'] == $valid_pass) {
    echo "Login bem-sucedido!";
} else {
    echo "Credenciais inválidas!";
}
?>