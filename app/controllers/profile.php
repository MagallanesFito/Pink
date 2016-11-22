<?php
	class Profile extends Controller{
		public function index($id=""){
			/*$Pagina = $this->model("Page");
			$Pagina->setTitle("Bienvenido");
			$Pagina->setCSS(["styles"]);
			$elementos = $Pagina->getContent();
			$this->view("login/perfil",$elementos);*/

			/*
				Se llama la funcion solo si la variable de sesion está activa (un usuario
				ha iniciado sesion exitosamente)
			*/

			//parent::__construct("Bienvenido",["styles"],["jquery-3.1.1.min"],"login/perfil");
			echo "bienvenido: " . $id ;
			
			$this->loadPage("Bienvenido",["styles","semantic","semantic.min"],["jquery-3.1.1.min"],"login/perfil");
		}
	}
?>