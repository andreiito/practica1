<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Guarda comentario</title>
</head>
<body>
<?php
include_once("conexion.php");

$nombre = $_POST['nombre'];
$appat = $_POST['appat'];
$correo = $_POST['correo'];
$apmat = $_POST['apmat'];
$tel = $_POST['tel'];
if(!empty($nombre)||!empty($correo)||!empty($tel)||!empty($appat)||!empty($apmat){
	$comentario = "insert into comentarios (nombre,correo,comentario) values('$nombre','$correo','$comentario')";
	$guarda_comentario = consulta($comentario);
	if($guarda_comentario == false){
		echo "Gracias por dejar tu comentario, en caso de ser necesario nuestros colaboradores se pondrán en contacto contigo";
	}
	else{
		echo "Hubo un error al intentar guardar tu comentario, intenta más tarde";
	}
}
else{
	echo "Los valores ingresados no son válidos";
}
?>
</body>
</html>
