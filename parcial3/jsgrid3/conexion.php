<?php
        function conectar()
        {
            $host="localhost";
            $user="root";
            $pass="";

            $bd="alumnos";

            $con=mysqli_connect($host, $user, $pass);
            mysqli_selesct_db($con, $bd);

            return $con;
        }
?>