<?php
$date = date('Y-m-d H:i:s');
$string = $date . "redesycom";
echo "¬°Felicitaciones, llegaste al final del ejercicio! \n
Fecha: " . $date . "
Verificaci√≥n: " . hash("sha256", $string);
?>
