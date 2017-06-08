<?php
include 'conexion.php';
$cliente_id= $_REQUEST['cliente_id'];

$query="DELETE FROM tbl_cliente WHERE cliente_id = '$cliente_id'";
$query1="DELETE FROM tbl_direccion WHERE cliente_id = '$cliente_id'";


$resultado = $conexion->query($query1);
$resultado = $conexion->query($query);

if ($resultado) {
	//echo 'Se elimino';
	header("Location: admin.php");
}else {
	echo ' No se elimino';
		
	}


