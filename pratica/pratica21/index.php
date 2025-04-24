<?php
$i = 0;
for($i; $i < 100; $i++) {
  if($i % 2 === 1)
    continue;
  print($i."<br>");
}
?>