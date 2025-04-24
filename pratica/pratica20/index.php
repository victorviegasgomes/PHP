<?php
print("\tloop while: <br>");
$i = 0;
while($i <= 10) {
  print("while: ".$i."<br>");
  $i++;
}
print("<br>\tloop do while: <br> <hr>");
$i = 0;
do {
  print("do while: ".$i."<br>");
  $i++;
}while($i <= 10);
print("<br>\tloop for: <br> <hr>");
for($i = 0; $i <= 10; $i++) {
  print("for: ".$i."<br>");
}
?>