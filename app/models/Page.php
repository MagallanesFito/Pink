<?php
/*
  setTitle:
  	Pone un titulo a tu ventana a personalizado, el que esta por default es:
  		Pink | La red social para universitarios
  setCSS:
  	Recibe un arreglo de nombres de archivos de css, para utilizarlo solo 
  	colocas los nombres de las hojas de estilo separadas por comas.
  setJS:
  	Al igual que el metodo anterios, recibe un array de nombres (los cuales son archivos de js)
  getContent:
  	Crea un arreglo de componentes que deben ser insertados en la vista a la hora de ser llamada
	la funcion regresa este arreglo y debe ser atrapada por un arreglo en el controlador
  	

  BASE_FOOTER,BASE_CSS son constantes definidas en el archivo core/Config.php
  que indican la ruta base de css y del footer

*/
class Page{
	private $title = "Pink | La red social para universitarios";
	//private $footer = BASE_FOOTER;
	private $baseCSS = BASE_CSS; 
	private $baseJS = BASE_JS;
	private $cssURL;
	private $jsURL;

	public function setTitle($titulo){
		if($titulo !== ""){
			$this->title = $titulo;
		}
	}
	/*public function getTitle(){
		return $this->title;
	}*/
	public function setCSS($CSSFiles = []){
		foreach ($CSSFiles as $archivo) {
			$this->cssURL = $this->cssURL . $this->baseCSS . $archivo . ".css'>";
		}
	}
	public function setJS($JSFiles = []){
		foreach($JSFiles as $archivo){
			$this->jsURL = $this->jsURL . $this->baseJS . $archivo . ".js'></script>";
		}
	}
	/*public function getCSS(){
		return $this->cssURL;
	}*/
	public function getContent(){
		$content["Title"] = $this->title;
		$content["CSS"] = $this->cssURL;
		$content["JS"] = $this->jsURL;
		return $content;
	}
	/*public function getFooter(){
		return $this->footer;
	}*/
}
?>
