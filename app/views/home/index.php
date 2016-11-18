<!DOCTYPE html>
<head>
	<title><?php echo $data["Title"];?></title>
	<?php echo $data["CSS"];?>
</head>
<body>
	<center>
	<h1>Bienvenido a Pink</h1>
	<h3>Esta es la ventana de inicio</h3>
	<a href="<?php echo BASE_URL; ?>login/">iniciar sesion</a>

	<footer>
		<?php echo BASE_FOOTER; //El footer siempre será el mismo?>
	</footer>

	</center>

</body>
</html>