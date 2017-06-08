<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/tienda.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
</head>


  <!--Sesiones -->
  <?php
  $row = 0;


session_start();

if(isset($_SESSION['u_usuario'])){
 
  // echo " " . $_SESSION['u_usuario'];

}
else{
  header("Location: ../index.php");
}
?>
  <!--fin sesiones -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="../logo/titulo-gran1.png" class="img-fluid" alt="Logo" width="25%">
                </a>
                <span class="pull-right">&nbsp;<a href='perfil.php'><i class="fa fa-arrow-circle-left fa-3x" aria-hidden="true" title='Atrás'></i>
                <span class="pull-right">&nbsp;<a href='cerrar_sesion.php'><i class="fa fa-sign-out fa-3x" aria-hidden="true" title='Cerrar sesión'></i></a></span>
            </div>
                
               
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
            
               
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  <!--div arriba-->
<div class="container">
            <div class="page-header">
                <a class="">
                    <img src="../logo/titulo-gran1.png" class="img-fluid" alt="Logo" width="25%">
                </a>


         <div class="">
        </a></span>
 
        <span class="pull-right">&nbsp;<a href='perfil.php'><i class="fa fa-arrow-circle-left fa-3x" aria-hidden="true" title='Atrás'></i></a></span>
        </div>

  <!--div arriba-->

<div id="wrapper">
<div class="cart-icon-top">
</div>
<div class="cart-icon-bottom">
</div>
<!--FORM para enviar la pasta a la pasarela -->

<div id="checkout" >
<form action="pasarela.php" name="carrito" method="POST">
<input value=<?php echo $row ?> id="importe" readonly name="importe" size="3" >
    <input type="submit" class="btn btn-success" value="PAGAR" title="PAGAR AHORA">
    
    
</div>
</form>


<!-- <div id="header">	
	<ul>
        <li><a href="">Home</a></li>
        <li><a href="">BRANDS</a></li>
        <li><a href="">DESIGNERS</a></li>
        <li><a href="">CONTACT</a></li>                                              
    </ul>		
</div> -->

<div id="sidebar">

	<h3>BOLSA DE LA COMPRA</h3>
    <div id="cart">
    	<span class="empty">Todavía no tienes nada contratado :(</span> 
         
    </div>
    <!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tbody><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/es/webapps/mpp/paypal-popup" title="Cómo funciona PayPal" onclick="javascript:window.open('https://www.paypal.com/es/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_37x23.jpg" border="0" alt="PayPal Logo" /></a></td></tr></tbody></table><!-- PayPal Logo --> 
 <!--    <h3>CATEGORIES</h3>
    <div class="checklist categories">
    	<ul>
        	<li><a href=""><span></span>New Arivals</a></li>
            <li><a href=""><span></span>Accesories</a></li>
            <li><a href=""><span></span>Bags</a></li>
            <li><a href=""><span></span>Dressed</a></li>
            <li><a href=""><span></span>Jackets</a></li>
            <li><a href=""><span></span>jewelry</a></li>
            <li><a href=""><span></span>Shoes</a></li>
            <li><a href=""><span></span>Shirts</a></li>
            <li><a href=""><span></span>Sweaters</a></li>
            <li><a href=""><span></span>T-shirts</a></li>
        </ul>
    </div> -->
     
</div>

<!-- <div id="grid"> -->
    <div class="product" name="uno">
    	<div class="info-large">
        	<!-- <h4>FLUTED HEM DRESS</h4>
            <div class="sku">
            	PRODUCT SKU: <strong>89356</strong>
            </div> -->
             
            <div class="price-big">
            	<span>€350</span> €350
            </div>
             
           <!--  <h3>COLORS</h3>
            <div class="colors-large">
                <ul>
                    <li><a href="" style="background:#222"><span></span></a></li>
                    <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                    <li><a href="" style="background:#f56060"><span></span></a></li>
                    <li><a href="" style="background:#44c28d"><span></span></a></li>
                </ul> 
            </div>

            <h3>SIZE</h3>
            <div class="sizes-large">
 				<span>XS</span>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>XXL</span>
            </div> -->
            
            <button class="add-cart-large">Add To Cart</button>                          
                         
        </div>
        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <!-- <img src="../IMG/no-disponible.png" alt="" /> -->
                <img src="../IMG/comida_sana.png" alt="" />
                <div class="image_overlay"></div>
               <!--  <div class="add_to_cart" onclick="document.carrito.importe.value=parseInt(document.carrito.importe.value)+350;" id="add_to_cart">A la bolsa</div> -->
                <div class="view_gallery">MÁS INFO</div>                
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_price">350€</span>
                        <span class="product_name">PACK MENSUAL</span>    
                        <p>Servicio diario durante un mes</p>                                            
                        
                        <div class="product-options">
                        <strong>INCLUYE</strong>
                        <span>Desayuno, Almuerzo, Comida, Merienda, Cena,</span>
                                                
                    </div>                       
                    </div>                         
                </div>
            </div>
            
            <div class="product-back">
                <div class="shadow"></div>
                <div class="carousel">
                    <ul class="carousel-container">
                        <li><img src="../IMG/repartidor.jpg" alt="" /></li>
                        <li><img src="../IMG/cuerpofit.jpg" alt="" /></li>
                        
                    </ul>
                    <div class="arrows-perspective">
                        <div class="carouselPrev">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                        <div class="carouselNext">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                    </div>
                </div>
                <div class="flip-back">
                    <div class="cy"></div>
                    <div class="cx"></div>
                </div>
            </div>	  
        </div>	
    </div>
    
    
    <div class="product" name="dos">
    <div class="info-large">
        <!-- 	<h4>PLEAT PRINTED DRESS</h4>
            <div class="sku">
            	PRODUCT SKU: <strong>89356</strong>
            </div> -->
             
            <div class="price-big">
            	<span>100€</span> 100€
            </div>
             
            <h3>COLORS</h3>
            <div class="colors-large">
                <ul>
                    <li><a href="" style="background:#222"><span></span></a></li>
                    <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                    <li><a href="" style="background:#f56060"><span></span></a></li>
                    <li><a href="" style="background:#44c28d"><span></span></a></li>
                </ul> 
            </div>

        <!--     <h3>SIZE</h3>
            <div class="sizes-large">
 				<span>XS</span>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>XXL</span>
            </div>
             -->
            <button class="add-cart-large">Add To Cart</button>                          
                         
        </div>
        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <img src="../IMG/comida_sana.png" alt="" />
                <div class="image_overlay"></div> 
                <div class="add_to_cart" onclick="document.carrito.importe.value=parseInt(document.carrito.importe.value)+100;" id="add_to_cart">A la bolsa</div>
                <div class="view_gallery">MÁS INFO</div>
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_price">100€</span>
                        <span class="product_name">PACK SEMANAL</span>    
                        <p>Servicio diario durante una semana</p>                                            
                        
                        <div class="product-options">
                        <strong>INCLUYE</strong>
                        <span>Desayuno, Almuerzo, Comida, Merienda, Cena,</span>
                        <!-- <strong>COLORS</strong>
                        <div class="colors">
                            <div class="c-blue"><span></span></div>
                            <div class="c-red"><span></span></div>
                            <div class="c-white"><span></span></div>
                            <div class="c-green"><span></span></div>
                        </div> -->
                    </div>                       
                    </div>                         
                </div>
            </div>
            
            <div class="product-back">
                <div class="shadow"></div>
                <div class="carousel">
                    <ul class="carousel-container">
                        <li><img src="../IMG/repartidor.jpg" alt="" /></li>
                        <li><img src="../IMG/cuerpofit.jpg" alt="" /></li>
                    </ul>
                    <div class="arrows-perspective">
                        <div class="carouselPrev">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                        <div class="carouselNext">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                    </div>
                </div>
                <div class="flip-back">
                    <div class="cy"></div>
                    <div class="cx"></div>
                </div>
            </div>	  
        </div>	
    </div>
    
    <div class="product" name="tres">
    <div class="info-large">
        	<h4>FLOWY SHIRT DRESS</h4>
            <div class="sku">
            	PRODUCT SKU: <strong>89356</strong>
            </div>
             
            <div class="price-big">
            	<span>20€</span> 20€
            </div>
             
            <h3>COLORS</h3>
            <div class="colors-large">
                <ul>
                    <li><a href="" style="background:#222"><span></span></a></li>
                    <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                    <li><a href="" style="background:#f56060"><span></span></a></li>
                    <li><a href="" style="background:#44c28d"><span></span></a></li>
                </ul> 
            </div>

           <!--  <h3>SIZE</h3>
            <div class="sizes-large">
 				<span>XS</span>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>XXL</span>
            </div> -->
            
            <button class="add-cart-large">Add To Cart</button>                          
                         
        </div>
        <div class="make3D">        
            <div class="product-front">
                <div class="shadow"></div>
                <img src="../IMG/comida_sana.png" alt="" />
                <div class="image_overlay"></div>
                    
                <!-- <div class="add_to_cart" onclick="document.carrito.importe.value=parseInt(document.carrito.importe.value)+20;" id="add_to_cart">A la bolsa</div> -->
                <div class="view_gallery">MÁS INFO</div>
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_price">20€</span>
                        <span class="product_name">PACK EVENTUAL</span>    
                        <p>Un servicio al día durante una semana</p>                                             
                        
                        <div class="product-options">
                        <strong>UNO A ELEGIR ENTRE </strong>
                        <span>Desayuno, Almuerzo, Comida, Merienda, Cena,</span>
                       <!--  <strong>COLORS</strong>
                        <div class="colors">
                            <div class="c-blue"><span></span></div>
                            <div class="c-red"><span></span></div>
                            <div class="c-white"><span></span></div>
                            <div class="c-green"><span></span></div>
                        </div> -->
                    </div>                       
                    </div>                         
                </div>
            </div>
            
            <div class="product-back">
                <div class="shadow"></div>
                <div class="carousel">
                    <ul class="carousel-container">
                        <li><img src="../IMG/repartidor.jpg" alt="" /></li>
                        <li><img src="../IMG/cuerpofit.jpg" alt="" /></li>
                    </ul>
                    <div class="arrows-perspective">
                        <div class="carouselPrev">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                        <div class="carouselNext">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                    </div>
                </div>
                <div class="flip-back">
                    <div class="cy"></div>
                    <div class="cx"></div>
                </div>
            </div>	  
        </div>	
    </div>
     
    
    
     </div></div></div>


    <!-- Footer -->
<?php
include("footer.php");
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../js/tienda.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
  </body>
</html>