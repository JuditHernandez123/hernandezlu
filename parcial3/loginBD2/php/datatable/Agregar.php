
<?php 
	include ("conexiontabla.php");
	$con = conectar();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>NUEVO</title>
 </head>
 
 
 	<form action="" method="post">
		<label>Nombre: </label>
		<input type="text" id="nombre" name="txtnombre"><br><br>
		<label>Apellido: </label>
		<input type="text" id="apellido" name="txtapellido"><br><br>
		<label>Semestre: </label>
		<input type="text" id="semestre" name="txtsemestre"><br><br>
		<label>Promedio: </label>
		<input type="text" id="promedio" name="txtpromedio"><br><br>
		<input type="submit" name="" value="Agregar">
		<a href="tabla.php">Regresar</a>
	</form>
	 <?php  

	 if( isset($_POST['txtnombre']) || isset($_POST['txtapellido']) || isset($_POST['txtsemestre']) || isset($_POST['txtpromedio']) ) {
        $nombre = $_POST['txtnombre'];
		$apellido = $_POST['txtapellido'];
		$semestre = $_POST['txtsemestre'];
		$promedio = $_POST['txtpromedio'];
        $sql = mysqli_query($con,"INSERT INTO alumnos(Nombre, Apellido, Semestre, Promedio)VALUES('".$nombre."','".$apellido."', '".$semestre."', '".$promedio."')");
     }
?>
 </body>
 </html>
