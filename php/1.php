<?php

                session_start();

                if(isset($_SESSION['u_usuario'])){
                  // echo "Bienvenido";
                  // echo " " . $_SESSION['u_usuario'];
                  }
                else{
                  header("Location: ../index.php");
                }
?>
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
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<!--  <link rel="stylesheet" href="../css/style2.css">  -->
    <title>JMFIT Nutrition</title>

 <meta charset="utf-8">
<!--modal-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="../logo/titulo-gran1.png" class="img-fluid" alt="Logo" width="25%">
                </a>
                      <div class="">
    <span class="pull-right">&nbsp;<a href='perfil.php'><i class="fa fa-arrow-circle-left fa-3x" aria-hidden="true" title='Atrás'></i></a></span>
  </div>
          </div>
                
               
        </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
            
               
            </div>
            <!-- /.navbar-collapse -->
      
        <!-- /.container -->
    </nav>
  
   
  <!--Sesiones -->
  <!--fin sesiones -->
  <!--div arriba-->

  <!--div arriba-->
    
  <!--Perfil -->
  <div class="container">
  <h2>Perfil personal</h2>
  <div class="row centered-form">
      <div class="row">
    
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Subir mi dieta</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../img/contacto.png" class="img-circle img-responsive"> </div> <br/>
                  <?php 
    if (isset($_REQUEST["result"])) {

      echo '<div style="text-align:center; color:red;">Se ha subido correctamente.</div>';     
    }else{
      echo '<div style="text-align:center; color:red;">Has superado el tamaño del archivo.</div>';   
    }
    ?>

<!-- procesoo-->

                <?php
                include('conexion.php');
                $m=$_SESSION['u_usuario'];
                $sql_perfil="SELECT * FROM tbl_cliente Where cliente_email='$m'"; 

                $resultado= mysqli_query($conexion, $sql_perfil);
                while ($row=mysqli_fetch_array($resultado)) {
               ?>




<!-- procesoo-->
<!-- subir dieta -->

		<form action="22.php?cliente_id=<?php echo $row['cliente_id']; ?>" id="formulario1" enctype="multipart/form-data" method="POST">
			
			Foto de la dieta <input type="file" name="imagen" value="<?php echo $row['imagen']; ?>">  
			Dieta en PDF o WORD <input type="file" name="cv">
			<input type="submit">
		</form>
</div></div></div></div></div></div>
<?php
include("footer.php");
?>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlvO6QnueCJUrb3yhqmEWDVb6CeIsdOvk&callback=initMap"></script>
  <script src="../js/index.js"></script>

<script type="text/javascript">

     $("#formulario1").on('submit',function(e){

        this.preventDefault();
       
        var formData = new FormData($(this)[0]);
        // var formData = new FormData(this);
     var url = "22.php"; // El script a dónde se realizará la petición.
        $.ajax({
               type: "POST",
               url: url,
               data: formData, // Adjuntar los campos del formulario enviado.
               success: function(data){

                   $("#respuesta").html(data); // Mostrar la respuestas del script PHP.
               }
             });

        return false;
         e.preventDefault(); // Evitar ejecutar el submit del formulario.
     });

</script>
<?php } ?>
  </body>
</html>