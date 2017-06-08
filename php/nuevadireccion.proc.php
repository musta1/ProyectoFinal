<?php
include("conexion.php");

$direccion= $_POST['direccion'];
$cliente_id=$_REQUEST['cliente_id'];


$query1="INSERT INTO tbl_direccion(direccion, cliente_id) VALUES('$direccion','$cliente_id') ";


$resultado= $conexion->query($query1);


if($resultado){
	header("Location: perfil.php");
}
else{
	echo "No se ha insertado :(";
}
?>