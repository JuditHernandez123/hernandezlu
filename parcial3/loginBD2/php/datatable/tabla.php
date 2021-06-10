<?php

    include("conexiontabla.php");
    $con=conectar();
    $sql="SELECT * FROM alumnos";
    $query=mysqli_query($con, $sql) or die(mysqli_error($con));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Alumnos</title>
</head>
<body>
<!-- <div class="btn-group" role="group" aria-label="Basic outlined example">
  <button type="button" class="btn btn-outline-primary">Left</button>
  <button type="button" class="btn btn-outline-primary">Middle</button>
  <button type="button" class="btn btn-outline-primary">Right</button>
</div> -->

<button onclick="window.location.href='Agregar.php'" style="width:100px; height:40px; FONT-SIZE: 12px; FONT-FAMILY: arial black; BACKGROUND-COLOR: red">Continue</button><br><br>
<!-- Botón para Agregar un registro -->
<div class="button">
				<a href="Agregar.php" class="btn btn-primary">Agregar</a><br><br>
</div>    
<!-- Botón para Editar un registro -->
<div class="button">
				<a href="editar.php" class="btn btn-primary">Editar</a><br><br>			
</div>
<!-- Botón para Eliminar un registro -->
<div class="button">
				<a href="borrar.php" class="btn btn-primary">Borrar</a><br><br>
<!-- Botón para Cerrar sesion -->
<div class="button">
				<a href="cerrar_sesion.php" class="btn btn-primary">Cerrar Sesión</a>	

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Semestre</th>
      <th scope="col">Promedio</th>
    </tr>
  </thead>
  <tbody>
  <?php
        
        while($row=mysqli_fetch_array($query)){
  ?>
    <tr>
      <th scope="row"><?php echo $row['ID']?></th>
      <td><?php echo $row['Nombre']?></td>
      <td><?php echo $row['Apellido']?></td>
      <td><?php echo $row['Semestre']?></td>
      <td><?php echo $row['Promedio']?></td>
    </tr>
    <?php 
        }
    ?>
  </tbody>
</table>


</div>  
</body>
</html>