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


<!-- Botón para Agregar un registro -->
<button type="button" class="btn btn-primary btn-lg" onClick="window.location.href='Agregar.php'" id="btn__agregar">Agregar</button>



<!-- Botón para Cerrar sesion -->
<button type="button" class="btn btn-primary btn-lg" onClick="window.location.href='../cerrar_sesion.php'" >Cerrar Sesión</button>

</script>
<table class="table table-hover">
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
      <th><a href="editar.php? id=<?php echo $row['ID']?> & nombre=<?php echo $row['Nombre']?> & apellido=<?php echo $row['Apellido']?> & semestre=<?php echo $row['Semestre']?> & promedio=<?php echo $row['Promedio']?>" class="btn btn_info">Editar</a>
      <th><a href="borrar.php? id=<?php echo $row['ID']?>" class="btn btn_info">Borrar</a>
      
    </tr>
    <?php 
        }
    ?>
  </tbody>
</table>


</div>  
</body>
</html>