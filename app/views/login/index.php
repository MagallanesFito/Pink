<!DOCTYPE html>
<head>
	<title><?php echo $data["Title"]; ?></title>
	<?php echo $data["CSS"];?>
</head>
<body>
	<center>
		<h1>Iniciar sesion</h1>
		<h3>Esta es la ventana de inicio de sesion</h3>
		<form action="<?php echo BASE_URL; ?>login/iniciar" method="post" >
			<input type="text" id="username" name="username"> <br>
			<input type="password" id="password" name="password"><br>
			<input type="submit" name="enviar">
		</form>
		<?php echo BASE_FOOTER;?>
	</center>
</body>
</html>
