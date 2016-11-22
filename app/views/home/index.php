<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title><?php echo $data["Title"];?></title>
	<?php echo $data["CSS"];?>
</head>
<body class="inicio">
	<center>
	<div class="centrado">
		<h1 id="titulo">Pink</h1>
		<h4>Inicia sesión</h4>
		<form action="<?php echo BASE_URL; ?>login/iniciar" method="post" class="ui form">
			<div class="ui input">
				<input type="text" id="username" name="username" placeholder="Nombre de usuario"> 
			</div><br><br>
			<div class="ui input">
				<input type="password" id="password" name="password" placeholder="Contraseña">
			</div><br><br>
		
		  <input id="botonEnviar" class ="ui primary  button"type="submit" name="enviar" value = "Iniciar sesion">
		</form>
		<h4>O puedes <a href="<?php echo BASE_URL;?>register/">registrarte</a></h4>
		<?php echo BASE_FOOTER; //El footer siempre será el mismo?>
	</div>
	</center>

</body>
</html>