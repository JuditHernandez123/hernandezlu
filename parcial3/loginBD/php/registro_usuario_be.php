<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario =$_POST['usuario'];
$contrasena =$_POST['contrasena'];
//Contraseña encriptada
$contrasena = hash('sha512', $contrasena);


$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
            VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

//verificar que no se repita el correo
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
if(mysqli_num_rows($verificar_correo) > 0){
    echo '
    <script>
        alert("Este correo ya está registrado, intenta con otro diferente");
        window.location = "../index.php";
    </script>';
    exit();
}

//verificar que no se repita el nombre de usuario
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
if(mysqli_num_rows($verificar_usuario) > 0){
    
    echo '
    <script>
        alert("Este usuario ya está registrado, intenta con otro diferente");
        window.location = "../index.php";
    </script>';
    exit();
}
$ejecutar = mysqli_query($conexion, $query);      

mysqli_close($conexion);

?>