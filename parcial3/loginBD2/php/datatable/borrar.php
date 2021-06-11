<?php
include ("conexiontabla.php");  
$con=conectar();

$id=$_GET['id']; 

?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>BORRAR</title>
 </head>
 <body>
 	<form action="" method="post">
		<label>ID: </label>
		<input type="text" id="id" name="txtid" value=<?php echo "$id"?>><br><br>	
		<input type="submit" name="" value="Borrar">
		<a href="tabla.php">Regresar</a>
	</form>
	<?php
		if( isset($_POST['txtid'])){
		$id = $_POST['txtid'];
        $sql = mysqli_query($con,"DELETE FROM alumnos WHERE ID='$id'");} 	
	?>

</body>
</html>