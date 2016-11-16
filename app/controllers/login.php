<?php
class Login extends Controller{

	public function index(){
		$Pagina = $this->model("Page");
		$Pagina->setTitle("Iniciar sesion en Pink!");
		$Pagina->setCSS(["styles"]);
		$elementos = $Pagina->getContent();
		$this->view("login/index",$elementos);
	}
}
?>