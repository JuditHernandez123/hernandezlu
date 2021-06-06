<?php

    include("conexion.php");
    $con=conectar();
    $sql="SELECT * FROM alumnos";
    $query=mysqli_query($con, $sql) or die(mysqli_error($con));
    // $sql="SELECT * FROM alumnos";
    // $query=mysqli_query($con, $sql);

    //$row=mysqli_fetch_array($query);

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
</body>
</html>