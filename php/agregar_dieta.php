<!DOCTYPE html>
<html>
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

 <meta charset="utf-8">
<!--modal-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </head>
  <body>
  <!--Sesiones -->
  <?php
session_start();

if(isset($_SESSION['u_usuario'])){
  echo "Bienvenido";
  echo " " . $_SESSION['u_usuario'];

}
else{
  header("Location: ../index.php");
}
?>
  <!--fin sesiones -->

    <!--div arriba-->
    <div class="container">
            <div class="page-header">
                <a class="">
                    <img src="../logo/titulo-gran1.png" class="img-fluid" alt="Logo" width="25%">
                </a>


      <div class="">
      <span class="pull-right">&nbsp;<a href='perfil.php'><i class="fa fa-arrow-circle-left fa-3x" aria-hidden="true" title='Atrás'></i></a></span>
      </div>
  <!--div arriba-->
  <!--div formulario-->
 <!--div arriba-->
    <!-- formulario -->
    
      
  <h2>Agregar nueva dieta</h2>
          <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          <div class="panel panel-default">
            
            <div class="panel-body">

            <form role="form" action="agregar_dieta.proc.php" method="POST">
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="dietas_nombre" id="dietas_nombre" class="form-control input-sm" placeholder="Nombre de la dieta" required autofocus>
                    </div>
                  </div>
                  <!--select del dietista-->
                  <div class="col-xs-12 col-sm-12 col-md-12">
                  <label for="sel1">Selecciona:</label>
                  <select class="form-control" id="sel1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                 </div>

                <!--   <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="date" name="cliente_fecha" id="cliente_fecha" class="form-control input-sm" min="1917-01-01" max="1999-12-31" required>
                    </div>
                  </div> -->
                
                  
                </div>

                <input type="submit" value="Insertar dieta" class="btn btn-info btn-block">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<!--FIN div formulario-->


  <!-- Footer -->
        <?php
        include("footer.php");
        ?>
          <script type="text/javascript" src="../js/bootstrap.js"></script>
        </body>
      </html>