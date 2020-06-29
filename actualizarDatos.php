<?php

include('BaseDatos.php');

if(isset($_POST["btnActualizar"])){


    $cedula=$_POST["cedula"];
    $correo=$_POST["correo"];
    $telefono=$_POST["telefono"];
   
    

    $operacionEnBaseDeDatos= new BaseDatos();


    $consulta="UPDATE usuarios SET correo='$correo', telefono='$telefono' where cedula='$cedula'";

    $resultado=$operacionEnBaseDeDatos->alterarBaseDatos($consulta);
    print_r($resultado);
}
else{
    echo("no se presiono");
}

?>