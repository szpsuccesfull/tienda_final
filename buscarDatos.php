<?php

     include('BaseDatos.php');

if (isset($_POST["btnBuscar"])){

    $cedula=$_POST["cedulaBuscar"];
   

    $consulta="SELECT nombre, apellido, correo, documento, password FROM usuarios WHERE cedula='$cedula'";
    
    $operacion= new BaseDatos();

    $resulatdo=$operacion->consultarEnBaseDatos($consulta);
     
    echo("<br>");
    echo("<br>");

    print_r($resulatdo);

    
} else {

    
    echo("no se ha presionado el boton");

}


?>