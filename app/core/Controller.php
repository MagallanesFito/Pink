<?php
/*
Esta clase será la super clase que dará soporte a las demás clases creadas.
*/

class Controller{
	protected function model($model){
		require_once('app/models/'.$model.'.php');
		return new $model;
	}
	protected function view($view,$data = []){
		require_once('app/views/'.$view.'.php');
	}
}

?>