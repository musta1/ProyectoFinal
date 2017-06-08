<?php
include 'conexion.php';
$cliente_id= $_REQUEST['cliente_id'];
$cliente_altura= $_POST['cliente_altura'];


$query="UPDATE tbl_cliente SET cliente_altura='$cliente_altura' WHERE cliente_id='$cliente_id' ";
echo $query;
$resultado = $conexion->query($query);

if ($resultado) {
	header("Location: perfil.php");
}else {
	echo ' No se modifico';
		
	
}