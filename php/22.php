<?php
include("conexion.php");
$cliente_id=$_REQUEST['cliente_id'];
//recibimos los datos de la IMG
$nombre_img=$_FILES['imagen']['name'];
$tipo_img=$_FILES['imagen']['type'];
$tamanyo_img=$_FILES['imagen']['size'];


//carpeta destino
$destino=$_SERVER['DOCUMENT_ROOT'].'/jmfit/php/ruta/subidas/';
//movemos la IMG del directorio temporal al directorio escogido
move_uploaded_file($_FILES ['imagen']['tmp_name'],$destino.$nombre_img);


//if(tipo_img=="image/jpeg" || tipo_img=="image/png" || tipo_img=="image/jpg")

if ($tamanyo_img<10000000){
	// echo '</br>'.$nombre_img.'<br>';
	// echo $tipo_img.'<br>';
	// echo $nombre_img;
	// echo $tipo_img;
	// echo $tamanyo_img;
	header("Location: 1.php?result=ok");
}else{
	// echo 'El tamaño del archivo debe de ser menor a 10 MB';
	// echo "</br>";
	// echo $nombre_img;
	// echo "</br>";
	// echo $tipo_img;
	// echo "</br>";
	// echo $tamanyo_img;
	header("Location: 1.php?result=error");
}

$query1="UPDATE tbl_cliente SET nombre_img='$nombre_img' WHERE cliente_id='$cliente_id' ";
 // $query1="INSERT INTO tbl_cliente(nombre_img) VALUES ('$nombre_img') ";
$resultado= $conexion->query($query1);





?>


