<?php
include 'conexion.php';
$direccion_id= $_REQUEST['direccion_id'];

$query="DELETE FROM tbl_direccion WHERE direccion_id = '$direccion_id'";
$resultado = $conexion->query($query);

if ($resultado) {
	//echo 'Se elimino';
	header("Location: perfil.php");
}else {
	echo ' No se elimino';
		
	}


