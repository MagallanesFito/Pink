<?php
/*
Esta clase será la super clase que dará soporte a las demás clases creadas.
*/

class Controller{
	//FOR TESTING
	/*public function __construct($Title,$CSS = [],$JS = [],$view){
		$this->loadPage($Title,$CSS,$JS,$view);
	}*/
	protected function model($model){
		require_once('app/models/'.$model.'.php');
		return new $model;
	}
	protected function view($view,$data = []){
		require_once('app/views/'.$view.'.php');
	}
	protected function loadPage($title,$CSS = [],$JS = [],$vista){
		$Pagina = $this->model("Page");
		$Pagina->setTitle($title);
		$Pagina->setCSS($CSS);
		$Pagina->setJS($JS);
		$elementos = $Pagina->getContent();
		$this->view($vista,$elementos);
	}
}

?>