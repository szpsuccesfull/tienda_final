<?php

     include('BaseDatos.php');

if (isset($_POST["btnBuscar"])){

    $cedula=$_POST["cedulaBuscar"];
   

    $consulta="SELECT nombre, apellido, correo,  password FROM usuarios WHERE cedula='$cedula'";
    
    $operacionEnBaseDeDatos= new BaseDatos();

    $resultado=$operacionEnBaseDeDatos->consultarEnBaseDatos($consulta);
     
    echo("<br>");
    echo("<br>");

    print_r($resultado);

    
} else {

    
    echo("no se ha presionado el boton");

}


?>