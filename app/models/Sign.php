<?php
/*
Maneja inicios de sesion y registros de usuario
*/
class Sign{
	//VARIABLES TEMPORALES PARA PRUEBAS, SE UTILIZAN CREDENCIALES PARA CONEXION A BASE DE DATOS
	private $username = "Admin";
	private $password = "123456";
	public function login($user,$password){
		//$this->limpiarDatos($user,$password);
		/*
			ALGORITMO DUMMY SOLO DE PRUEBAS
		*/
		if($user == $this->username && $password==$this->password){
			$base = BASE_URL;
			header("Location: " . $base . "profile");
		}
		else{
			echo "DATOS NO VALIDOS";
		}
	}
	public function signup(){
		//por lo pronto no hace nada
		/*
			antes que nada, llama a la funcion auxiliar limpiarDatos para evitar ingresos maliciosos
			Utiliza el formulario para registrar un nuevo usuario en la base de datos 
		*/
	}
	private function limpiarDatos($user,$password){
		//por lo pronto no hace nada
		/*
			Limpia los datos ingresados por el usuario, asegura que solo queden datos válidos en contra
			de ataques a la base de datos
				sql injection
				xss attack
		*/
	}	
	public function logout(){
		//por lo printo no hace nada
		/*
			Destruye la sesion actual y redirecciona a la pagina principal
		*/
			$base = BASE_URL;
		header("Location: " . $base . "home");	
	}
}
?>