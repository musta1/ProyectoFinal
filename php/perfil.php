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
                <span class="pull-right">&nbsp;<a href='cerrar_sesion.php'><i class="fa fa-sign-out fa-3x" aria-hidden="true" title='Cerrar sesión'></i></a></span>
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
              <h3 class="panel-title">INFORMACIÓN PERSONAL</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../img/contacto.png" class="img-circle img-responsive"> </div> <br/>
                

                <?php
                include('conexion.php');
                $m=$_SESSION['u_usuario'];
                $sql_perfil="SELECT * FROM tbl_cliente Where cliente_email='$m'"; 

                $resultado= mysqli_query($conexion, $sql_perfil);
                while ($row=mysqli_fetch_array($resultado)) {
               ?>

                 <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tb>
                      <tr>
                        <td>Nombre:</td>                                        
                        <td> <?php echo "".$row['cliente_nombre']." "; ?> </td>                        
                      </tr>
                      <tr>
                        <td>Primer Apellido:</td>
                        <td> <?php echo "".$row['cliente_apellido1']." "; ?> </td>
                      </tr>
                      <tr>
                        <td>Segundo Apellido:</td>
                        <td> <?php echo "".$row['cliente_apellido2']." "; ?> </td>
                      </tr>
                       <tr>
                        <td>Fecha nacimiento:</td>
                        <td> <?php echo "".$row['cliente_fecha']." "; ?> </td>
                      </tr>
                       <tr>
                        <td>Peso (KG):</td>
                        <td> <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#myModal2">Modificar</button>  <?php echo "".$row['cliente_peso']." "; ?>  </td>
                      </tr>
                       <tr>
                        <td>Altura (CM):</td>
                        <td><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#myModal3">Modificar</button> <?php echo "".$row['cliente_altura']." "; ?> </td>
                      </tr>
                       <tr>
                        <td>Sexo:</td>
                        <td> <?php echo "".$row['cliente_sexo']." "; ?> </td>
                      </tr>
                      <tr>
                          
                      <tr>
                        <td>Email</td>
                        <td><?php echo "".$row['cliente_email']." "; ?></td>
                      </tr>
                        <td>Teléfono:</td>
                        <td><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#myModal4">Modificar</button> <?php echo "".$row['cliente_telefono']." "; ?> </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>


              


            <!-- Modal 2 -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modifica el peso</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="actualizarpeso.proc.php?cliente_id=<?php echo $row['cliente_id']; ?>" method="POST">
          <input type="text" name="cliente_peso" id="cliente_peso" class="form-control input-sm" placeholder="Introduzca su nuevo peso" value="<?php echo $row['cliente_peso']; ?>" required>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
          <input type="submit" value="Nuevo peso" class="btn btn-info btn-block">

        </div>
        </form>
      </div>
      
    </div>
  </div>
  

<!-- -->
            <!-- Modal 3 -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modifica la altura</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="actualizaraltura.proc.php?cliente_id=<?php echo $row['cliente_id']; ?>" method="POST">
          <input type="text" name="cliente_altura" id="cliente_altura" class="form-control input-sm" placeholder="Introduzca su nueva altura" value="<?php echo $row['cliente_altura']; ?>" required>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
          <input type="submit" value="Nueva altura" class="btn btn-info btn-block">

        </div>
        </form>
      </div>
      
    </div>
  </div>
  
<!-- -->

       
<!-- -->

            <!-- Modal 4 -->
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modifica el teléfono</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="actualizartelefono.proc.php?cliente_id=<?php echo $row['cliente_id']; ?>" method="POST">
          <input type="text" name="cliente_telefono" id="cliente_telefono" class="form-control input-sm" placeholder="Introduzca su nuevo teléfono" value="<?php echo $row['cliente_telefono']; ?>" required>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
          <input type="submit" value="Nuevo teléfono" class="btn btn-info btn-block">

        </div>
        </form>
      </div>
      
    </div>
  </div>
  

<!-- -->




            <div class="panel-heading">
              <h3 class="panel-title">DIRECCIONES DE ENTREGAS</h3>
            </div>

              <?php 
                include('conexion.php');

                $sql1 = "SELECT direccion, direccion_id FROM tbl_direccion Where cliente_id=(SELECT cliente_id FROM tbl_cliente Where cliente_email='$m') "; 
                $resultado1= mysqli_query($conexion, $sql1);
                while ($row1=mysqli_fetch_array($resultado1)) {
               ?>




            <div class="panel-body">
              <div class="row">
                
               
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                                             
                      <tr>
                        
                                       



                        <?php $direccion_id=$row1['direccion_id']; ?>
                        <td><a class="btn btn-danger" href="eliminar_direccion.php?direccion_id=<?php echo $direccion_id; ?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true" title="Eliminar"></i></a></td>

                        <td> <?php echo "".$row1['direccion']." "; ?></td>

                      </tr>
                     <?php } ?>
                    </tbody>
                  </table>



                  <!-- modal-->
                  <!-- Trigger the modal with a button -->
                

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Introduzca una nueva dirección</h4>
                      </div>
                      <div class="modal-body">
                        <form role="form" action="nuevadireccion.proc.php?cliente_id=<?php echo $row['cliente_id']; ?>" method="POST">
                          
                        <input type="text" name="direccion" id="direccion" class="form-control input-sm" placeholder="Introduzca dirección" required>
                       
                      </div>
                      <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                        <input type="submit" value="Nueva dirección" class="btn btn-info btn-block">
                      </div>
                       </form>
                    </div>

                  </div>
                </div>
                  
                  <a href="#" onclick="nuevaventana()";><button type="button" class="btn btn-primary">Localízame</button></a>


                    <script language=javascript> 
                    function nuevaventana (URL){ 
                       window.open("localizame.php","ventana1","width=600,height=400,scrollbars=NO") 
                    } 
                    </script>  


                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Añadir dirección</button>
                  <!-- fin modal -->
                  </div>
              </div>
            </div>

             <div class="panel-heading">
              <h3 class="panel-title">DIETA</h3>
            </div>
               <?php 
                include('conexion.php');
                 // $m=$_SESSION['u_usuario'];
                $sql2 = "SELECT dietas_nombre FROM tbl_dietas WHERE dietas_id=(SELECT dietas_id FROM tbl_cliente Where cliente_email='$m')"; 
                // echo $sql2;
                $resultado2= mysqli_query($conexion, $sql2);
                while ($row2=mysqli_fetch_array($resultado2)) {
               ?>
            <div class="panel-body">
              <div class="row">
                
                 <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        
                        <td> <a href="dieta.php?dietas_id=<?php echo $dietas_id; ?>"><?php echo "".$row2['dietas_nombre']." "; ?></a></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  <a href="tienda.php" class="btn btn-primary">Comprar Pack</a>
                  <a href="new.dieta.php" class="btn btn-primary">Añadir dieta</a>
                  <a href="1.php" class="btn btn-primary">Sube tu dieta</a>
                  </div>
              </div>
            </div>
            
            
          </div>
        </div>
      </div>
    </div>
    </div>
 
<?php } ?>
    <!-- Footer -->
<?php
include("footer.php");
?>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlvO6QnueCJUrb3yhqmEWDVb6CeIsdOvk&callback=initMap"></script>
  <script src="../js/index.js"></script>



  </body>
</html>