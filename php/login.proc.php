<?php
include("conexion.php");

$cliente_nombre= $_POST['cliente_nombre'];
$cliente_apellido1= $_POST['cliente_apellido1'];
$cliente_apellido2= $_POST['cliente_apellido2'];
$cliente_fecha=$_POST['cliente_fecha'];
$cliente_peso= $_POST['cliente_peso'];
$cliente_altura= $_POST['cliente_altura'];
$cliente_sexo= $_POST['cliente_sexo'];


$query1="INSERT INTO tbl_cliente(cliente_nombre, cliente_apellido1, cliente_apellido2, cliente_fecha, cliente_peso, cliente_altura, cliente_sexo) VALUES('$cliente_nombre','$cliente_apellido1', '$cliente_apellido2', '$cliente_fecha', 'cliente_peso', 'cliente_altura', 'cliente_sexo') ";


$resultado= $conexion->query($query1);


if($resultado){
	header("Location: ../index.php");
}
else{
	echo "No se ha insertado :(";
}
?>