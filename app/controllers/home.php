<?php
class Home extends Controller{
	
	public function index(){
		/*$Pagina = $this->model('Page'); //models/Page.php
		$Pagina->setCSS(["styles"]);

		$elementos = $Pagina->getContent();

		$this->view('home/index',$elementos);*/
		$this->loadPage("Pink | La red social para universitarios",
			["styles","semantic","semantic.min"],
			["jquery-3.1.1.min"],"home/index");
	}

}
?>