<!DOCTYPE html>
<html>
<head>
	<title>JMFIT Nutrition</title>
	<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Website CSS style -->
    <link rel="stylesheet" type="text/css" href="css/registro.css">
</head>
<body>
<!-- nav con login -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <form id="signin" class="navbar-form navbar-right" role="form">
                       <div class="input-group">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                       <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email">
                       </div>

                       <div class="input-group">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                       <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">                                        
                       </div>

                       <button type="submit" class="btn btn-primary">Acceder</button>
                       <br><a href="php/login.php">¿No tienes cuenta?</a>
       </form>
    </div>
  </div>
</nav>
<!-- slider -->
<div class="container">
  <h2>Ofertas</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="IMG/1.jpg" alt="pic1" style="width:100%;">
      </div>

      <div class="item">
        <img src="IMG/2.jpg" alt="pic2" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="IMG/3.jpg" alt="pic3" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<!-- Footer -->
<?php
include("php/footer.php");
?>
<script src="js/bootstrap.min.js"></script>
</body>
</html>