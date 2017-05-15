<!-- 
  session_start();
  include ('conexion.php');
    if(!isset($_SESSION["cliente_id"])){
      header("location: ../index");
    } -->

<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-expo.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  </head>
  <body>
    <form name="fr_modify" action="perfil.proc.php" method="POST">
    <div class="masthead">
      <h5 class="masthead-title">
        <a href="#">HOLAAAAA</a>
      </h5>
      <hr class="masthead-hr">
      <ul class="masthead-nav">
      <?php 
        include('conexion.php');
        $sql_perfil = "SELECT * FROM tbl_cliente "; 

        $resultado= mysqli_query($conexion, $sql_perfil);
          while ($row=mysqli_fetch_array($resultado)) {
            echo "<img src='../img/contacto.jpg'><br/><br/>";
            echo "".$row['cliente_nombre']." ";
            echo "".$row['cliente_apellido1']." ";
            echo "".$row['cliente_apellido2']."<br/>";
            echo "".$row['cliente_fecha']."<br/>";
            echo "".$row['cliente_peso']."kg, ";
            echo "".$row['cliente_altura']."cm<br/>";
            echo "".$row['cliente_sexo'].", ";
            echo "".$row['cliente_telefono']."<br/>";
            echo "".$row['cliente_email']."<br/>";
            
          }
      ?>     
      </ul>
    </div>
    
    </form>
    
  </body>
</html>