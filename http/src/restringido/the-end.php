<?php
$date = date('Y-m-d H:i:s');
$string = $date . "redesycom";
echo "¡Felicitaciones, llegaste al final del ejercicio! \n
En la entrega adjuntá la siguiente información: \n
Fecha: " . $date . "
Verificación: " . hash("sha256", $string);
?>
