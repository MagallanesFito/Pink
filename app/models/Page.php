<?php
/*
  setTitle:
  	Pone un titulo a tu ventana a personalizado, el que esta por default es:
  		Pink | La red social para universitarios
  setCSS:
  	Recibe un arreglo de nombres de archivos de css, para utilizarlo solo 
  	colocas los nombres de las hojas de estilo separadas por comas.

  BASE_FOOTER,BASE_CSS son constantes definidas en el archivo core/Config.php
  que indican la ruta base de css y del footer

*/
class Page{
	private $title = "Pink | La red social para universitarios";
	//private $footer = BASE_FOOTER;
	private $baseCSS = BASE_CSS; //for debug
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
		return $content;
	}
	/*public function getFooter(){
		return $this->footer;
	}*/
}
?>