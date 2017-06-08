<?php
session_start();
//recogida con el POST
$email = $_POST["email"];
$password = $_POST["password"];
include ("conexion.php");

$proceso = $conexion->query("SELECT * FROM tbl_cliente WHERE cliente_email='$email' AND cliente_password='$password' AND cliente_categoria='usuario'");
$proceso2 = $conexion->query("SELECT * FROM tbl_cliente WHERE cliente_email='$email' AND cliente_password='$password' AND cliente_categoria='admin'");
$proceso3 = $conexion->query("SELECT * FROM tbl_cliente WHERE cliente_email='$email' AND cliente_password='$password' AND cliente_categoria='dietista'");

if($resultado = mysqli_fetch_array($proceso)){
	$_SESSION['u_usuario'] = $email;
	header("Location: perfil.php");
	//echo "funciona bien";
}
elseif($resultado2 = mysqli_fetch_array($proceso2)){
	$_SESSION['u_usuario'] = $email;
	header("Location: admin.php");
	//echo "funciona bien";
}
elseif($resultado3 = mysqli_fetch_array($proceso3)){
	$_SESSION['u_usuario'] = $email;
	header("Location: dietista.php");
	//echo "funciona bien";
}
else{
	header("Location: ../index.php");
	//echo "sesion mal realizada";
}

?>

