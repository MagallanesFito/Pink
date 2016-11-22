<?php
class Register extends Controller{
	public function index(){
		$this->loadPage("Registrarse en Pink!",
			["styles","semantic","semantic.min"],
			["jquery-3.1.1.min"],"register/index");
	}
}
?>