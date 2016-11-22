<?php
/*
crear metodo loadPage()
*/
class Login extends Controller{

	public function index(){
		/*$Pagina = $this->model("Page");
		$Pagina->setTitle("Iniciar sesion en Pink!");
		$Pagina->setCSS(["styles"]);
		$elementos = $Pagina->getContent();
		$this->view("login/index",$elementos);*/

		//utilizando el constructor de ls superclase
		//parent::__construct("Iniciar sesion en Pink!", ["styles"] ,["jquery-3.1.1.min"],"login/index");


		$this->loadPage("Iniciar sesion en Pink!", 
			["styles","semantic","semantic.min"] ,
			["jquery-3.1.1.min"],"login/index");
	}
	public function iniciar(){
		$usuario = $_POST['username'];
		$contra = $_POST['password'];
		$Sesion = $this->model("Sign");
		$Sesion->login($usuario,$contra);
	}
	public function salir(){
		$Sesion = $this->model("Sign");
		$Sesion->logout();
	}
}
?>