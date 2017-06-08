<?php
include("conexion.php");

$cliente_nombre= $_POST['cliente_nombre'];
$cliente_apellido1= $_POST['cliente_apellido1'];
$cliente_apellido2= $_POST['cliente_apellido2'];
$cliente_fecha=$_POST['cliente_fecha'];
$cliente_peso= $_POST['cliente_peso'];
$cliente_altura= $_POST['cliente_altura'];
$cliente_sexo= $_POST['cliente_sexo'];
$cliente_telefono= $_POST['cliente_telefono'];
$cliente_email= $_POST['cliente_email'];
$cliente_password= $_POST['cliente_password'];
$direccion= $_POST['direccion'];
$cliente_objetivo= $_POST['cliente_objetivo'];
$coment= $_POST['coment'];

$query1="INSERT INTO tbl_cliente(cliente_nombre, cliente_apellido1, cliente_apellido2, cliente_fecha, cliente_peso, cliente_altura, cliente_sexo, cliente_telefono, cliente_email, cliente_password, cliente_objetivo, coment) VALUES('$cliente_nombre','$cliente_apellido1', '$cliente_apellido2', '$cliente_fecha', '$cliente_peso', '$cliente_altura', '$cliente_sexo', '$cliente_telefono', '$cliente_email','$cliente_password', '$cliente_objetivo', '$coment') ";

$resultado= $conexion->query($query1);

$resultado=$conexion->query("SELECT MAX(cliente_id) AS id FROM tbl_cliente");
if ($row = mysqli_fetch_row($resultado)) {
$id = trim($row[0]);
echo $id;
}


$query2="INSERT INTO tbl_direccion(direccion, cliente_id) VALUES ('$direccion', '$id') ";
//echo $query2;
$resultado= $conexion->query($query2);

 if($resultado){
	header("Location: admin.php");
}
else{
	echo "No se ha insertado :(";
}
?>