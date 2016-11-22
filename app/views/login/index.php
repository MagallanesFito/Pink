<!DOCTYPE html>
<head>
 	<meta charset="utf-8">
	<title><?php echo $data["Title"]; ?></title>
	<?php echo $data["CSS"];?>
</head>
<body>
	<center>
		<h1>Iniciar sesion</h1>
		<h3>Esta es la ventana de inicio de sesion</h3>
		<form action="<?php echo BASE_URL; ?>login/iniciar" method="post" >
		<h4>Tu nombre de usuario:</h4> <br>
			<input type="text" id="username" name="username"> <br><br>
		<h4>Tu contraseña:</h4> <br>
			<input type="password" id="password" name="password"><br><br>
			<input type="submit" name="enviar" value = "Iniciar sesion">
		</form>
		<?php echo BASE_FOOTER;?>
	</center>
</body>
</html>
