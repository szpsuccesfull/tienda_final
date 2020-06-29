<?php

     include('BaseDatos.php');

if (isset($_POST["btnEnviar"])){
    $cedula=$_POST["cedulaUsuario"];
    $nombre=$_POST["nombreUsuario"];
    $apellido=$_POST["ApellidoUsuario"];
    $correo=$_POST["correoUsuario"];
    $password=$_POST["passUsuario"];

    $consulta="INSERT INTO usuarios( cedula, nombre, apellido, correo, password) VALUES ('$cedula','$nombre','$apellido','$correo','$password')";
    
    $operacion= new BaseDatos();

    $resulatdo=$operacion->alterarBaseDatos($consulta);

    if($resulatdo){
        echo("se enviaron los datos con exito");
    }else{
        echo("No se ha procesado la solicitud");
    }

} else {

    
    echo("no se ha presionado el boton");

}


?>