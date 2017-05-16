<?php
	include ('conexion.php');
	$cliente_nom = $_POST['cliente_nom'];
	$cliente_apellido1 = $_POST['cliente_apellido1'];
	$cliente_apellido2 = $_POST['cliente_apellido2'];
	$cliente_fecha = $_POST['cliente_fecha'];
	$cliente_peso = $_POST['cliente_peso'];
	$cliente_altura = $_POST['cliente_altura'];
	$cliente_sexo = $_POST['cliente_sexo'];
	$cliente_telf = $_POST['cliente_telf'];
	$cliente_email = $_POST['cliente_email'];

	// session_start();
	// if (!isset($_SESSION['cliente_id'])) {
	// 	header("location:../index.php");
	// }
	

?>