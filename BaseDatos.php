<?php

class BaseDatos{

    //Atributos
    private $servidor="localhost";
    private $usuario="root";
    private $clave="";
    private $nombreBaseDatos="bd_tienda";
    private $conexion; 

    //Constructor
    public function __construct(){}


    //Metodos
    
    //1. Metodo para conectarnos con la base de datos
    public function conectarConBaseDatos(){

        //Configurar la conexión
        $this->conexion= mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->clave,
            $this->nombreBaseDatos
        );

        //Verificar la conexión
        if(!($this->conexion)){
            die('Error de conexión: ');
        }else{
            echo("Conexión exitosa");
            echo("<br>");
        }
    }


    //2. Metodo para escribir en la base de datos (insertar, actualizar, borrar)
    public function alterarBaseDatos($consultaSQL){

        $this->conectarConBaseDatos();
        $resultado=$this->conexion->query($consultaSQL);
        return($resultado);
        $this->conexion->close();
    }

        //3. Metodo para Leer datos en la base de datos (buscar)
   public function consultarEnBaseDatos($consultaSQL){

        $this->conectarConBaseDatos();
        $resultado=$this->conexion->query($consultaSQL);
        
        $arreglofilas=array();
        foreach ($resultado as $registros){
                 $arreglofilas[]=$registros;
           
        }
        
        return($arreglofilas);
        $this->conexion->close();
        

}


}






?>