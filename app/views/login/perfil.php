<!DOCTYPE html>
<head>
	<title><?php echo $data["Title"];?></title>
	<?php echo $data["CSS"];?>
</head>
<body>
	<center>
		<h1>Iniciaste sesion en Pink!</h1>
		<a href="<?php echo BASE_URL; ?>login/salir">Cerrar sesion</a>
		<?php echo BASE_FOOTER;?>
	</center>
</body>
</html>