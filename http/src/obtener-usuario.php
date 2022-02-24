<p><?php
if ($_SERVER['HTTP_USUARIO_REDES'] == 'obtener') {
  echo("Bien hecho! Los datos para ingresar son: \n
    Usuario: redes\n
    Contraseña: RYC\n
    Ahora vuelva a acceder a la página inicial con los datos anteriores.\n
    PISTA: Investigue el uso del encabezado Authorization para el método Basic. El comando base64 puede ser de ayuda!");
}
else {
         echo("Para obtener el usuario y la contraseña haga un requerimiento a esta página seteando el encabezado 'Usuario-Redes' con el valor 'obtener'");
}
?></p>
