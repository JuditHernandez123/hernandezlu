
<?php 
	include ("conexiontabla.php");
	$con = conectar();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>NUEVO</title>
 </head>
 <body>
 	<form action="" method="post">
        <label>ID: </label>
		<input type="text" id="id" name="txtid"><br><br>
		<label>Nombre: </label>
		<input type="text" id="nombre" name="txtnombre"><br><br>
		<label>Apellido: </label>
		<input type="text" id="apellido" name="txtapellido"><br><br>
		<label>Semestre: </label>
		<input type="text" id="semestre" name="txtsemestre"><br><br>
		<label>Promedio: </label>
		<input type="text" id="promedio" name="txtpromedio"><br><br>
		<input type="submit" name="" value="Editar">
		<a href="tabla.php">Regresar</a>
	</form>
	 <?php  

	 if( isset($_POST['txtid'])) {
        $id = $_POST['txtid'];
        $nombre = $_POST['txtnombre'];
		$apellido = $_POST['txtapellido'];
		$semestre = $_POST['txtsemestre'];
		$promedio = $_POST['txtpromedio'];
        $sql = mysqli_query($con,"UPDATE alumnos SET Nombre='$nombre', Apellido='$apellido', Semestre='$semestre', Promedio='$promedio' WHERE ID='$id'");
     }
?>
 </body>
 </html>