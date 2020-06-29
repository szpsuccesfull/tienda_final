<?php



include('BaseDatos.php');

if(isset($_POST["btnactualizar"])){


    $cedula=$_POST["cedulaUsuario"];
    $correo=$_POST["correoUsuario"];
    $password=$_POST["passUsuario"];
   
    
    $operacionEnBaseDeDatos= new BaseDatos();


    $consulta="UPDATE usuarios SET correo='$correo',password='$password' WHERE cedula=' $cedula' ";

    
    $resultado=$operacionEnBaseDeDatos->alterarBaseDatos($consulta);
    print_r($resultado);
}
else{
    echo("no se presiono");
 }


?>