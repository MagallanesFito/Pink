<?php
/*
Controla todas las caracteristicas internas de los controladores
*/
class Controller{
	protected function model($model){
		require_once('../app/models/'.$model.'.php');
		return new $model;
	}

	public function view($view,$data = []){
		rquire_once('../app/views/'.$view.'.php');
	}
}

?>