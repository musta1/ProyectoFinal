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
	<!--div arriba-->
<div class="container">
            <div class="page-header">
                <a class="">
                    <img src="../logo/titulo-gran1.png" class="img-fluid" alt="Logo" width="25%">
                </a>




                <div class="">
    <span class="pull-right">&nbsp;<a href='admin.php'><i class="fa fa-arrow-circle-left fa-3x" aria-hidden="true" title='Atrás'></i></a></span>
  </div>

  <!--div arriba-->
		<!-- formulario -->
		<div class="container">
			<div class="container">
  <h2>Agregar nuevo Cliente</h2>
          <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		
			 			<div class="panel-body">

			 			<form role="form" action="agregar_cliente.proc.php" method="POST">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="cliente_nombre" id="cliente_nombre" class="form-control input-sm" placeholder="Nombre" required autofocus>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="cliente_apellido1" id="cliente_apellido1" class="form-control input-sm" placeholder="Primer Apellido" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="cliente_apellido2" id="cliente_apellido2" class="form-control input-sm" placeholder="Segundo Apellido" required>
			    					</div>
			    				</div>
			    					<!--direccion -->
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<input type="text" name="direccion" id="direccion" class="form-control input-sm" placeholder="Dirección" required>
			    					</div>
			    				</div>
			    				<!--direccion -->
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="date" name="cliente_fecha" id="cliente_fecha" class="form-control input-sm" min="1917-01-01" max="1999-12-31" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-4 col-sm-4 col-md-4">
			    					<div class="form-group">
			    						<input type="text" name="cliente_peso" id="cliente_peso" maxlength="3" class="form-control input-sm" placeholder="Peso (Kg)" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-4 col-sm-4 col-md-4">
			    					<div class="form-group">
			    						<input type="text" name="cliente_altura" id="cliente_altura" maxlength="3" class="form-control input-sm" placeholder="Altura (cm)" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<label class="radio-inline"><input type="radio" name="cliente_sexo" value="otros" checked>Prefiere no revelarlo</label>
										<label class="radio-inline"><input type="radio" name="cliente_sexo" value="mujer">Mujer</label>
										<label class="radio-inline"><input type="radio" name="cliente_sexo" value="hombre">Hombre</label>
			    					</div>
			    				</div>
			    				<!-- OBJETIVO -->
			    				   
					                  <div class="col-xs-12 col-sm-12 col-md-12">
					                    <div class="form-group">
					                      <select name="cliente_objetivo" class="form-control" required>
					                      <!-- <option value="<?php echo $row['cliente_categoria']; ?>"><?php echo $row['cliente_categoria']; ?></option> -->
					                      <option value="Aumentar">Aumentar masa muscular</option>
					                      <option value="Definición">Definición</option>
					                      <option value="Proteíca"> Proteíca</option>
					                      <option value="Hipocalorica">Hipocalorica</option>
					                      <option value="HiperProteícas">HiperProteícas</option>
					                      </select> 
					                    </div>
					                  </div>
					               
			    				<!-- OBJETIVO -->
			    				<!-- Comentarios -->
			    				<div class="col-xs-12 col-sm-12 col-md-12">
						    	<div class="form-group">
								  <label for="coment">Comentarios:</label>
								  <textarea class="form-control" rows="5" name="coment" id="coment" placeholder="Sin gluten, sin lactosa, vegetariano, alergías... "></textarea>
								</div>
								</div>
			    				<!-- Comentarios -->
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="cliente_telefono" id="cliente_telefono" maxlength="9" class="form-control input-sm" placeholder="Teléfono" required>
			    					</div>
			    				</div>
			    				
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="cliente_email" id="cliente_email" class="form-control input-sm" placeholder="Email Address" required>
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="cliente_password" id="cliente_password" class="form-control input-sm" placeholder="Password" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" required>
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="submit" value="Dar de alta" class="btn btn-info btn-block">
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