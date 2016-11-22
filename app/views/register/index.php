<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title><?php echo $data["Title"];?></title>
	<?php echo $data["CSS"];?>
</head>
<body>
	<h1 style="text-align:center;margin-top:50px;">Crear una cuenta de pink</h1>
	<div class="ui container">
		<div class="ui grid">
			<div class="twelve wide column">
				<form action="#" method="post" class="ui form">

					<label>Escribe tu nombre</label>
					<div class="ui input">
						
						<input type="text" id="Nombre" name="name" placeholder="Primer Nombre"> 
						<input type="text" id="lastName" name="lastName" placeholder="Segundo Nombre"> 
					</div><br><br>

					<div class="ui input">
						<label>Nombre de usuario</label>
						<input class="formulario" type="text" id="username" name="username" placeholder="Nombre de usuario"> 
					</div><br><br>


					<div class="ui input">
						<label>Matricula</label>
						<input type="text" id="ID" name="ID" placeholder="Matricula Universitaria"> 
					</div><br><br>

					<div class="ui input">
						<label>Correo electrónico</label>
						<input type="text" id="email" name="email" placeholder="Correo Electrónico"> 
					</div><br><br>

					<select class="ui dropdown">
						<option value="">Carrera que Cursas</option>
						<option value="1">CS Computacionales</option>
						<option value="2">Matemáticas</option>
						<option value="3">Física</option>
						<option value="4">Biología</option>
					</select><br><br>

					<div class="ui input">
						<input type="password" id="password" name="password" placeholder="Nueva Contraseña">
					</div><br><br>

					<div class="ui input">
						<input type="password" id="passwordAgain" name="passwordAgain" placeholder="Ingrese nuevamente la contraseña">
					</div><br><br>

					<select class="ui dropdown">
						<option value="">Genero</option>
						<option value="1">Hombre</option>
						<option value="2">Mujer</option>
						<option value="3">Ambos</option> <!-- Quitar despues -->
					</select><br><br>

					<div class="ui input">
						<label>Fecha de nacimiento</label>
						<input type="text" id="dayBirth" name="day" placeholder="Día nuevamente la contraseña">
						<select class="ui dropdown">
						<option value="">Mes</option>
						<option value="1">Enero</option>
						<option value="2">Febrero</option>
						<option value="3">Marzo</option>
						<option value="4">Abril</option>
						<option value="5">Mayo</option>
						<option value="6">Junio</option>
						<option value="7">Julio</option>
						<option value="8">Agosto</option>
						<option value="9">Septiembre</option>
						<option value="10">Octubre</option>
						<option value="11">Noviembre</option>
						<option value="12">Diciembre</option>
					</select>
					<input type="text" id="anio" name="year" placeholder="Año">
					</div>

				  <input id="botonRegistro" class ="ui positive  button"type="submit" name="enviar" value = "Registrarte">
				</form>
			</div>


			<div class="four wide column">
				<img src="../public/img/7.jpg" width="700" height="500">
			</div>
		</div>
	</div>
	
</body>
</html>