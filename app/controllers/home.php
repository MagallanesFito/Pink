<?php
class Home extends Controller{
	
	public function index(){
		$Pagina = $this->model('Page'); //models/Page.php
		$Pagina->setCSS(["styles"]);

		$elementos = $Pagina->getContent();

		$this->view('home/index',$elementos);
	}

}
?>