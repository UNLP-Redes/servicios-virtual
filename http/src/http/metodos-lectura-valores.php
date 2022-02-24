<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>M&eacute;todos HTTP: Lectura de valores desde REQUEST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="./bootstrap/js/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>

    <div id="wrap">
        
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="../index.html"><i class="icon-home icon-white"></i></a>
          <a class="brand" href="https://catedras.info.unlp.edu.ar" target="_blank">Redes y Comunicaciones</a>
          <a class="brand" href="http://www.info.unlp.edu.ar" target="_blank">Facultad de Inform&aacute;tica</a>
          <a class="brand" href="http://www.unlp.edu.ar" target="_blank">UNLP</a>
        </div>
      </div>
    </div>

    <div class="container">
        
<h1>M&eacute;todos HTTP: Lectura de valores desde REQUEST</h1>
    <?php 
    $form_fields=array(
        "Nombre"=>"form_nombre",
        "Apellido"=>"form_apellido",
        "Email"=>"form_mail",
        "Sexo"=>"form_sexo",
        "Contrase&ntilde;a"=>"form_pass",
        "Recibir confirmaciones por email"=>"form_confirma_mail"
    );
    function print_value($fName)
    {
        if (! array_key_exists($fName,$_REQUEST) ){
            echo $fName=='form_confirma_mail'?'No':'N/A';
            return;
        }
        $val=$_REQUEST[$fName];
        switch ($fName){
            case 'form_sexo': 
                echo $val=='sexo_masc'?'Masculino':'Femenino';
                break;
            case 'form_confirma_mail':
                echo "Si";
                break;
            default:
                echo empty($val)?'N/A':$val;
        }
    }
    ?>
    <p>
    &Eacute;sta p&aacute;gina es el resultado de leer los valores recibidos en un mensaje HTTP. Desde el punto de vista del programador, puede obligarse la lectura seg&uacute;n el m&eacute;todo sea <em>GET, POST u ambos</em>. En este caso, utilizamos el &uacute;ltimo caso, es decir que este mismo c&oacute;digo sirve para leer valores enviados utilizando GET o POST indistintamente.
    <h2> Los valores recibidos son </h2>
    <table border="0" width="80">
        <?php foreach($form_fields as $field=>$fieldName): ?>
        <tr>
            <td nowrap><?php echo $field?>:</td><td><?php print_value($fieldName); ?> </td>
        </tr>
        <?php endforeach; ?>
    </table>
    </p>
    </div> 
    
    </div>
    
    <div id="footer">
      <div class="container">
        <p class="muted credit">Redes y Comunicaciones</p>
      </div>
    </div>
  </body>
</html>
