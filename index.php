<!DOCTYPE html>
<html>
<head>
	<title>JMFIT Nutrition</title>
	<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
</head>
<body>
<!-- nav con login -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <form id="signin" class="navbar-form navbar-right" role="form">
                       <div class="input-group">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                       <input id="email" type="email" class="form-control" name="email" value="" placeholder="Usuario">
                       </div>

                       <div class="input-group">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                       <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">                                        
                       </div>

                       <button type="submit" class="btn btn-primary">Acceder</button>
                       <br><a href="registro.php">¿No tienes cuenta?</a>
       </form>
    </div>
  </div>
</nav>
<!-- Footer -->
<?php
include("php/footer.php");
?>
<script src="js/bootstrap.min.js"></script>
</body>
</html>