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

  <?php
      $cliente_id=$_REQUEST['cliente_id'];
      include("conexion.php");
      $query="SELECT * FROM tbl_cliente WHERE cliente_id='$cliente_id'";
      $resultado=$conexion->query($query);
      $row=$resultado-> fetch_assoc();
?>


  <div class="page-header">
    <h1>Modificar Clientes <span class="pull-right">&nbsp;<a href='admin.php'><i class="fa fa-arrow-circle-left" aria-hidden="true" title='Atrás'></i></a></span></h1>
  </div>
  


<!-- formulario -->
    <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          <div class="panel panel-default">
            
            <div class="panel-body">
           
            <form role="form" action="modificar_cliente.proc.php?cliente_id=<?php echo $row['cliente_id']; ?>" method="POST">
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">

                      <input type="text" name="cliente_nombre" id="cliente_nombre" class="form-control input-sm" placeholder="Nombre" value="<?php echo $row['cliente_nombre']; ?>" required>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="cliente_apellido1" id="cliente_apellido1" class="form-control input-sm" placeholder="Primer Apellido" value="<?php echo $row['cliente_apellido1']; ?>" required>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="cliente_apellido2" id="cliente_apellido2" class="form-control input-sm" placeholder="Segundo Apellido" value="<?php echo $row['cliente_apellido2']; ?>" required>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="date" name="cliente_fecha" id="cliente_fecha" class="form-control input-sm" min="1917-01-01" max="1999-12-31" value="<?php echo $row['cliente_fecha']; ?>" required>
                    </div>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-4">
                    <div class="form-group">
                      <input type="text" name="cliente_peso" id="cliente_peso" maxlength="3" class="form-control input-sm" placeholder="Peso (Kg)" value="<?php echo $row['cliente_peso']; ?>" required>
                    </div>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-4">
                    <div class="form-group">
                      <input type="text" name="cliente_altura" id="cliente_altura" maxlength="3" class="form-control input-sm" placeholder="Altura (cm)" value="<?php echo $row['cliente_altura']; ?>" required>
                    </div>
                  </div>
                  <!--
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <label class="radio-inline"><input type="radio" name="cliente_sexo" checked>Prefiero no revelarlo</label>
                    <label class="radio-inline"><input type="radio" name="cliente_sexo">Mujer</label>
                    <label class="radio-inline"><input type="radio" name="cliente_sexo">Hombre</label>
                    </div>
                  </div>
                  -->
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="cliente_telefono" id="cliente_telefono" maxlength="9" class="form-control input-sm" placeholder="Teléfono" value="<?php echo $row['cliente_telefono']; ?>" required>
                    </div>
                  </div>
                  
                </div>

                <div class="form-group">
                  <input type="email" name="cliente_email" id="cliente_email" class="form-control input-sm" placeholder="Email Address" value="<?php echo $row['cliente_email']; ?>" required>
                </div>

                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" name="cliente_password" id="cliente_password" class="form-control input-sm" placeholder="Password" value="<?php echo $row['cliente_password']; ?>" required>
                    </div>
                  </div>
                  
                </div>
                
                <input type="submit" value="Modificar" class="btn btn-info btn-block">
              
                           
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <!-- Footer -->
<?php
include("footer.php");
?>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
  </body>
</html>