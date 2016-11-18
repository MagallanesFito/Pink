<?php

/*
Controla la estructura de la url de la pagina
Se compone de tres partes: Controlador y método
Para una url cualquiera: 
	dominio.algo/controlador/metodo/argumento1/argumento2..   
	
	En este caso la url se maneja:
	localhost/KaratsubaFramework/controlador/metodo/argumento1/argumento2...
*/
class App{
	protected $controller = 'home'; //Controlador por defecto
	protected $method = 'index'; //metodo por defecto del controlador home
	protected $params = [];
	public function __construct(){
		//echo $_SERVER['REQUEST_URI'];
		$url = $this->parseURL();
		/*
		 Llama al controlador que está en la primera parte de la URL (si es que existe)
		 si no se especifica se llama al que está por defecto (home)
		*/
		if(file_exists('app/controllers/'.$url[0].'.php')){
<<<<<<< HEAD
			//echo "por fin funciona esta wea";
=======
			//echo "FUNCIONAAAA";
>>>>>>> origin/master
			$this->controller = $url[0];
			unset($url[0]);
		}
		require_once('app/controllers/'.$this->controller.'.php');
		$this->controller = new $this->controller;

		
		/*
		Llama al metodo que está en la segunda parte de la URL, (si es que existe)	
		si no se especifica, se llama al que está por defecto (index). 
		*/
		if(isset($url[1])){
			if(method_exists($this->controller, $url[1])){
				$this->method = $url[1];
				unset($url[1]);
			}
		}
		$this->params = $url ? array_values($url) : [];

		call_user_func_array([$this->controller, $this->method],$this->params);
	}
	
	/*
		Obtiene la url y la filtra para tener una url válida, en la que se puede acceder a
		un controlador y a un método
	*/
	public function parseURL(){
		if(isset($_GET['url'])){
			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
}

?>
