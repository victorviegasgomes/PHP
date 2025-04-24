<?php
print("conversão com typecast: <br>");
$val_float = 3.1415;
$val_integer = (int) $val_float;
$valor_double = (double) $val_integer;
$val_string = (string) $valor_double;

print("float: $val_float <br>");
print("int: $val_integer <br>");
print("double: $valor_double <br>");
print("string: $val_string <br>");
?>