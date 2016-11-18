<?php
	class Profile extends Controller{
		public function index(){
			/*$Pagina = $this->model("Page");
			$Pagina->setTitle("Bienvenido");
			$Pagina->setCSS(["styles"]);
			$elementos = $Pagina->getContent();
			$this->view("login/perfil",$elementos);*/

			/*
				Se llama la funcion solo si la variable de sesion está activa (un usuario
				ha iniciado sesion exitosamente)
			*/
			$this->loadPage("Bienvenido",["styles"],[],"login/perfil");
		}
	}
?>