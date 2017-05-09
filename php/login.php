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
		<!-- formulario -->
		<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		
			 			<div class="panel-body">
			    		<form role="form">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="apellido1" id="apellido1" class="form-control input-sm" placeholder="Primer Apellido">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="apellido2" id="apellido2" class="form-control input-sm" placeholder="Segundo Apellido">
			    					</div>
			    				</div>
			    				<div class="col-xs-4 col-sm-4 col-md-4">
			    					<div class="form-group">
			    						<input type="text" name="edad" id="edad" class="form-control input-sm" placeholder="Edad">
			    					</div>
			    				</div>
			    				<div class="col-xs-4 col-sm-4 col-md-4">
			    					<div class="form-group">
			    						<input type="text" name="peso" id="peso" class="form-control input-sm" placeholder="Peso (Kg)">
			    					</div>
			    				</div>
			    				<div class="col-xs-4 col-sm-4 col-md-4">
			    					<div class="form-group">
			    						<input type="text" name="altura" id="altura" class="form-control input-sm" placeholder="Altura (cm)">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="submit" value="Aceptar" class="btn btn-info btn-block">
			    		<p class="form-group">Al continuar confirmas que has leído y que estás de acuerdo con las <a href="#">Condiciones de uso</a> y <a href="#">Política de privacidad</a>.</p>
							<hr>
							<p>¿Ya tienes cuenta? <a href="../index.php">Inicia sesión</a></p>
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