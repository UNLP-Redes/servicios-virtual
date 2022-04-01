<?php
$date = date('Y-m-d H:i:s');
$string = $date . "redesycom";
echo "¡Felicitaciones, llegaste al final del ejercicio! \n
Fecha: " . $date . "
Verificación: " . hash("sha256", $string);
?>
