<!DOCTYPE html>
<html>
	<head>
		<title>Registro de Usuarios</title>
		<link href="css/estilo_registro.css" type="text/css" rel="stylesheet">
		<script src="jquery.validate.js"></script>
		<script src="jquery-3.3.1.js"></script>
		<script>
			$("#formulario").validate();
		</script>
	</head>
	<body>
		<h1>Registro al Curso</h1>
		<p>Por favor ingrese sus datos en el siguiente formulario.</p>
		<br/> <br/>
		<h2>Registro</h2>
	<form action="alta.php" method="post" id="formulario">
	<!--<form action="autenticar.php" method="post">
	<input type="text" name="usuario" autocomplete="off">
		

	-->
		<label>Nombre</label><input type="text" name="nombre" required/><br/>
		<label>Apellido Paterno</label><input type="text" name="appat" required/><br/>
		<label>Apellido Materno</label><input type="text" name="apmat"/><br/>
		<label>Telefono</label><input type="text" name="tel" required/><br/>
		<label>Correo</label><input type="text" name="correo" required/><br/>
		<input type="submit" value="Enviar">
	</form>


<div id="caja3">
<div id="caja2">
<div id="caja1">
hola
	</div>
	</div>
	</div>
	</body>
</html>
	
