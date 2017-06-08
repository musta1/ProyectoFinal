<?php
include 'conexion.php';
$cliente_id= $_REQUEST['cliente_id'];
$cliente_peso= $_POST['cliente_peso'];


$query="UPDATE tbl_cliente SET cliente_peso='$cliente_peso' WHERE cliente_id='$cliente_id' ";
echo $query;
$resultado = $conexion->query($query);

if ($resultado) {
	header("Location: perfil.php");
}else {
	echo ' No se modifico';
		
	
}