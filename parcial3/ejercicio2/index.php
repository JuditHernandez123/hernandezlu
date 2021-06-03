<?php

            $user = 'root';
            $password = '';
    
            $conexion = new PDO('mysql:host=localhost;dbname=hernandezlu', $user, $password);

            foreach ($conexion->query("SELECT * FROM  alumnos") as $row) {
                print "{$row['ID']}  \t";
                print $row['Nombre'] . "\t";
                print $row['Apellido'] . "\t";
                print $row['Semestre'] . "\t";
                print $row['Promedio'] . "\n";
            }

?>