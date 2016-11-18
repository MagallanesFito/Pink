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
		$this->loadPage("Iniciar sesion en Pink!", ["styles"] ,[],"login/index");
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