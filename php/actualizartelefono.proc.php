<?php
include 'conexion.php';
$cliente_id= $_REQUEST['cliente_id'];
$cliente_telefono= $_POST['cliente_telefono'];


$query="UPDATE tbl_cliente SET cliente_telefono='$cliente_telefono' WHERE cliente_id='$cliente_id' ";
echo $query;
$resultado = $conexion->query($query);

if ($resultado) {
	header("Location: perfil.php");
}else {
	echo ' No se modifico';
		
	
}