<!DOCTYPE html>
<html>
  <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <!-- Website CSS style -->
    <link rel="stylesheet" type="text/css" href="../css/registro.css">
    <link rel="stylesheet" type="text/css" href="../css/metodopago.css">
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
  // echo "Bienvenido";
  // echo " " . $_SESSION['u_usuario'];

}
else{
  header("Location: ../index.php");
}
?>
  <!--fin sesiones -->

<!-- importe -->


  <!--div arriba-->
<div class="container">
            <div class="page-header">
                <a class="">
                    <img src="../logo/titulo-gran1.png" class="img-fluid" alt="Logo" width="25%">
                </a>


                <div class="">
    <span class="pull-right">&nbsp;<a href='cerrar_sesion.php'><i class="fa fa-sign-out fa-3x" aria-hidden="true" title='Cerrar sesión'></i></a></span>
  </div>

  <!--div arriba-->
<div class="container">
  <!-- <div class="row"> -->
    <div class="paymentCont">
            <div class="headingWrap">
                <h3 class="headingTop text-center">Selecciona el metodo de pago</h3>  
                <p class="text-center">Pago seguro <img src="../IMG/shield.png"></p>
              <h1>
                  <?php extract($_REQUEST); echo "IMPORTE:<b> $importe €</b><br/>";  ?>
              </h1>
            </div>
          <!--   <div class="paymentWrap">
              <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                      <label class="btn paymentMethod active">
                        <div class="method visa"></div>
                          <input type="radio" name="options" checked> 
                      </label>
                      <label class="btn paymentMethod">
                        <div class="method master-card"></div>
                          <input type="radio" name="options"> 
                      </label>
                      <label class="btn paymentMethod">
                        <div class="method amex"></div>
                          <input type="radio" name="options">
                      </label>
                     
                                       
                  </div>        
            </div> -->
           <!--  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="W8A4DBRKM456A">
            <input type="hidden" name="amount" value="700">
            <input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma rápida y segura de pagar en Internet.">
            <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
            </form> -->
           
        <div class="col-sm-6">
            <form name="_xclick" action="https://www.paypal.com/es/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="8664.joan23@fje.edu">
            <input type="hidden" name="currency_code" value="EUR">
            <input type="hidden" name="item_name" value="JMFit Pack">
            <input type="hidden" name="amount" value="<?php echo $importe; ?>"> 
            <input type="image" class="card-img-top" src="../IMG/comprarahora.png" border="0" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro">
            </form></div>
            </div>
            </div>
            <div class="footerNavWrap clearfix">
              <div class="btn btn-success pull-left btn-fyi"><span class="glyphicon glyphicon-chevron-left"></span><a href="tienda.php">VOLVER ATRAS</div></a>
              <!-- <div class="btn btn-success pull-right btn-fyi"><a href="visa.php">CONFIRMAR PAGO<span class="glyphicon glyphicon-chevron-right"></span></div></a> -->
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