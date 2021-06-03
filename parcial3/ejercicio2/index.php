<?php

    class conexion{
            
            $user = 'root';
            $password = '';
            
            $conexion = new PDO('sqlsvr:Server=localhost; Database=hernandezlu, $user, $password');
    }

if($conexion){
    echo "Conectado a la base de datos";
}else{
    echo "No está conectado a la base de datos";
}

?>