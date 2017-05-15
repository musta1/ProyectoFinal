<!DOCTYPE html>
<html lang="en">
    <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

    <!-- Website CSS style -->
    <link rel="stylesheet" type="text/css" href="../css/registro.css">

    <!-- Website Font style -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <title>JMFIT Nutrition</title>
  </head>
  <body>
  <div class="page-header">
    <h1>Registro <span class="pull-right">&nbsp;<a href='../index.php'><i class="fa fa-arrow-circle-left" aria-hidden="true" title='Atrás'></i></a></span></h1>
  </div>
    <!-- tabla admin para usuarios- -->
<div class="container">
  <h2>Administrar Usuarios</h2>
  <p>Modificación / bajas Usuarios</p>
  <table class="table">
    <thead>
      <tr>
        <th>Nombre dietista</th>
        <th>Apellido dietista</th>
        <th>Apellido 2 dietista</th>
        <th><a href="guardar_recurso.php"> <img src="boton_nuevo.png" height="50" width="110"></a></th>
      </tr>
    </thead>
     <?php
      include("conexion.php");
      $query="SELECT * FROM recursos";
      $resultado=$conexion->query($query);
      while($row=$resultado-> fetch_assoc()){
      ?>
    <tbody>
         
     <tr class="danger">
     <td><?php echo $row['recurso_id']; ?></td>
     <td><?php echo $row['recurso_nombre']; ?></td>
     <td><?php echo $row['recurso_tipo']; ?></td>
     <?php $recurso_id=$row['recurso_id']; ?>
      <td><a href="modificar2.php?recurso_id=<?php echo $recurso_id; ?>"><img src="modificar.png" height="40" width="70"></a></td>
      <td><a href="eliminar2.php?recurso_id=<?php echo $recurso_id; ?>"><img src="eliminar.png" height="40" width="70"></a></td>
      </tr>

      <?php
      }
      ?>
          
    </tbody>
  </table>
</div>
   <!-- Footer -->
<?php
include("footer.php");
?>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
  </body>
</html>