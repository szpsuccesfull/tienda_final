<?php

include('BaseDatos.php');

if(isset($_POST["btnBorrar"])){

    $cedula=$_POST["cedulaBorrar"];


    $operacionEnBaseDeDatos= new BaseDatos();


    $consulta="DELETE FROM usuarios WHERE  cedula='$cedula'";

    $resultado=$operacionEnBaseDeDatos->alterarBaseDatos($consulta);
    print_r($resultado);
}
else{
    echo("no se presiono el boton");
}
?>