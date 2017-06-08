<?php
include 'conexion.php';
$cliente_id= $_REQUEST['cliente_id'];
$cliente_nombre= $_POST['cliente_nombre'];
$cliente_apellido1= $_POST['cliente_apellido1'];
$cliente_apellido2= $_POST['cliente_apellido2'];
$cliente_fecha = $_POST['cliente_fecha'];
$cliente_peso= $_POST['cliente_peso'];
$cliente_altura= $_POST['cliente_altura'];
$cliente_telefono= $_POST['cliente_telefono'];
$cliente_email = $_POST['cliente_email'];
$cliente_password = $_POST['cliente_password'];
$cliente_categoria = $_POST['cliente_categoria'];
$coment = $_POST['coment'];

$query="UPDATE tbl_cliente SET cliente_nombre='$cliente_nombre', cliente_apellido1='$cliente_apellido1', cliente_apellido2='$cliente_apellido2', cliente_fecha='$cliente_fecha', cliente_peso='$cliente_peso', cliente_altura='$cliente_altura', cliente_telefono='$cliente_telefono', cliente_email='$cliente_email', cliente_password='$cliente_password', cliente_categoria='$cliente_categoria', coment='$coment'  WHERE cliente_id='$cliente_id' ";
echo $query;
$resultado = $conexion->query($query);

if ($resultado) {
	header("Location: admin.php");
}else {
	echo ' No se modifico';
		
	
}


