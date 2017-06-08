<?php
include 'conexion.php';
$cliente_id= $_REQUEST['cliente_id'];
$dietas_id= $_POST['dietas_id'];


$query="UPDATE tbl_cliente SET dietas_id='$dietas_id' WHERE cliente_id='$cliente_id' ";
echo $query;
$resultado = $conexion->query($query);

if ($resultado) {
	header("Location: dietista.php");
}else {
	echo ' No se modifico';
		
	
}


