
<?php 
	include ("conexiontabla.php");
	$con = conectar();

	$id=$_GET['id'];
	$nombre=$_GET['nombre'];
	$apellido=$_GET['apellido'];
	$semestre=$_GET['semestre'];
	$promedio=$_GET['promedio'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>EDITAR</title>
 </head>
 <body>
 	<form action="" method="post">
        <label>ID: </label>
		<input type="text" id="id" name="txtid" value=<?php echo "$id"?>><br><br>
		<label>Nombre: </label>
		<input type="text" id="nombre" name="txtnombre" value=<?php echo "$nombre"?>><br><br>
		<label>Apellido: </label>
		<input type="text" id="apellido" name="txtapellido" value=<?php echo "$apellido"?>><br><br>
		<label>Semestre: </label>
		<input type="text" id="semestre" name="txtsemestre" value=<?php echo "$semestre"?>><br><br>
		<label>Promedio: </label>
		<input type="text" id="promedio" name="txtpromedio" value=<?php echo "$promedio"?>><br><br>
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