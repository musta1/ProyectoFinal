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
<!DOCTYPE html>
<html>
	<head> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="../css/registro.css">
	    <title>JMFIT Nutrition</title>

	 	<meta charset="utf-8">
	<!--modal-->
	 

  	</head>
  	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="../logo/titulo-gran1.png" class="img-fluid" alt="Logo" width="25%">
                </a>
                <span class="pull-right">&nbsp;<a href='perfil.php'><i class="fa fa-arrow-circle-left fa-3x" aria-hidden="true" title='Atrás'></i></a></span>
  			</div>
                
               
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
            
               
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
  <!--Perfil -->
  		<div class="container">
  			<br/><br/><br/>
  				<div class="row centered-form">
      				<div class="row">
        				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          					<div class="panel panel-info">
           						<div class="panel-heading">
              						<h3 class="panel-title">INFORMACIÓN SOBRE LA DIETA</h3>
            					</div>
	            				<div class="panel-body">
	              					<div class="row">
	                					<div class="col-md-3 col-lg-3 " align="center"> 
	                						<img alt="User Pic" src="../img/contacto.png" class="img-circle img-responsive"> 
	                					</div> <br/>
	                					<?php 
	                					include('conexion.php');
	                					$m = $_SESSION['u_usuario'];
	                					// $sql_dieta = "SELECT plato_id FROM tbl_platos where menu_id=(SELECT menu_id FROM tbl_menu where dieta_id =(SELECT dietas_id FROM tbl_dietas where cliente_id= (SELECT cliente_id from tbl_cliente where cliente_email='$m')))"; 
	                					// $resultado2= mysqli_query($conexion, $sql_dieta);
	                					$sql_menu = "SELECT menu_id, menu_comida FROM tbl_menu where dieta_id =(SELECT dietas_id from tbl_cliente where cliente_email='$m')";
	                					// echo $sql_menu;
	                					$resultado2= mysqli_query($conexion, $sql_menu);
	                					?>
	                				 	<table class="table table-hover">
												    <thead>
												      <tr>
												        <th>  </th>
												        <th>Lunes</th>
												        <th>Martes</th>
												        <th>Miercoles</th>
												        <th>Jueves</th>
												        <th>Viernes</th>
												      </tr>
												    </thead>
												    <tbody>
										<?php
										$cont=0;
	                					while(($menu=mysqli_fetch_array($resultado2)) && ($cont<5)){
	                						$sql_dieta = "SELECT menu_comida, plato_descripcion FROM tbl_menu INNER JOIN tbl_platomenu ON tbl_platomenu.menu_id=tbl_menu.menu_id INNER JOIN tbl_platos ON tbl_platomenu.plato_id=tbl_platos.plato_id WHERE tbl_menu.menu_comida='".$menu['menu_comida']."' AND dieta_id =(SELECT dietas_id from tbl_cliente where cliente_email='$m') ORDER BY `tbl_menu`.`menu_semana` ASC";
	                						   // echo $sql_dieta;
	                						?>
	                						<tr><td><?php echo "". $menu['menu_comida']."" ?></td>
	                						<?php $cont=$cont+1; ?>
	                						<?php
	                						$resultado3= mysqli_query($conexion, $sql_dieta);
	                						
		                					while($dieta=mysqli_fetch_array($resultado3)) {
		                						?>
		                							<td><?php echo "".$dieta['plato_descripcion'].""; ?>
		                							</td>
		                							
											<?php } ?>
											</tr>
										<?php } ?>
												    </tbody>
										</table>    
										</div>
									</div>
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