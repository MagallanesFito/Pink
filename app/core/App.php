<?php

/*
Controla la estructura del programa
*/
class App{
	protected $controller = 'home'; //default controller
	protected $method = 'index'; //default method in home controller
	protected $params = [];
	public function __construct(){
		//echo $_SERVER['REQUEST_URI'];
		$url = $this->parseURL();
		if(file_exists('app/controllers/'.$url[0].'.php')){
			//echo "por fin funciona esta wea";
			$this->controller = $url[0];
			unset($url[0]);
		}
		//require_once('../app/controllers/'.$this->controller.'.php');
		require_once('app/controllers/'.$this->controller.'.php');
		$this->controller = new $this->controller;

		if(isset($url[1])){
			if(method_exists($this->controller, $url[1])){
				$this->method = $url[1];
				unset($url[1]);
			}
		}
		$this->params = $url ? array_values($url) : [];

		call_user_func_array([$this->controller, $this->method],$this->params);
	}

	public function parseURL(){
		if(isset($_GET['url'])){
			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
}

?>