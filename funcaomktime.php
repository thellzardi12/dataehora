<?php

$date = mktime(14,30,00,10,28,2023);
//Mostra 28-09-2023
echo date("d-m-y", $date). "<br>";

//Mostra 28-09-2023 02:30
echo date("d-m-y H:i", $date). "<br>";

//Mostra 2023
echo date("y", $date). "<br>";

?>

