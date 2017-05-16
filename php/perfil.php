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
    <title>JMFIT Nutrition</title>
  </head>
  <body>
  <!--Sesiones -->
  <?php
session_start();

if(isset($_SESSION['cliente_nombre'])){
  echo "Session exitosa\n Bienvenido";
  echo " " . $_SESSION['cliente_nombre'];

  echo "<a href='cerrar_sesion.php'> Cerrar Sesion</a></br>";

}
else{
  //header("Location: ../index.php");
}
?>
  <!--fin sesiones -->


      <div class="page-header">
    <h1>Registro <span class="pull-right">&nbsp;<a href='../index.php'><i class="fa fa-arrow-circle-left" aria-hidden="true" title='Atrás'></i></a></span></h1>
  </div>
      
      
      <ul class="masthead-nav">
      <?php 
        include('conexion.php');
        $sql_perfil = "SELECT * FROM tbl_cliente "; 

        $resultado= mysqli_query($conexion, $sql_perfil);
          while ($row=mysqli_fetch_array($resultado)) {
            echo "<img src='../img/contacto.png'><br/><br/>";
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
  <!--Perfil -->
  <div class="container">
      <div class="row">
    
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">INFORMACION PERSONAL</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../img/contacto.png" class="img-circle img-responsive"> </div> <br/>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>CODIGO:</td>
                        <td>Programming</td>
                      </tr>
                      <tr>
                        <td>NOMBRE:</td>
                        <td>06/23/2013</td>
                      </tr>
                      <tr>
                        <td>DOCUMENTO:</td>
                        <td>01/24/1988</td>
                      </tr>
                      
                         <tr>
                          
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                        <td>NUMERO TELEFONICO:</td>
                        <td>123-4567-890(Landline)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
            <div class="panel-heading">
              <h3 class="panel-title">DOCUMENTACION</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>FOTO DOCUMENTO:</td>
                        <td>Programming</td>
                      </tr>
                      <tr>
                        <td>Certificado de Notas/ICFES:</td>
                        <td>06/23/2013</td>
                      </tr>
                      <tr>
                        <td>Certificado de residencia:</td>
                        <td>01/24/1988</td>
                      </tr>
                   
                      <tr>
                        <td>Recibo Publico:</td>
                        <td>Male</td>
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">Actualizar</a>
                  </div>
              </div>
            </div>
             <div class="panel-heading">
              <h3 class="panel-title">CAMBIO CONTRASEÑA</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Contraseña:</td>
                        <td>Programming</td>
                      </tr>
                      <tr>
                        <td>Nueva Contraseña:</td>
                        <td>06/23/2013</td>
                      </tr>
                      <tr>
                        <td>Confirmar Nueva Contraseña:</td>
                        <td>01/24/1988</td>
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">Cambiar Contraseña</a>
                  </div>
              </div>
            </div>
            
            
          </div>
        </div>
      </div>s
    </div>
    
  </body>
</html>