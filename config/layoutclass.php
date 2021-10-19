<?php
require_once 'models/seomodel.php';

class layout{

	public static function sections(){

		$dolar = "";
		if (empty($_GET['action'])) {
			$dolar = "inicio";
		}else{
			$dolar = strtolower($_GET['action']);
		}

		$getData = new seo();
		$getData->setNombre($dolar);
		$data = $getData->selectAll();

		require_once 'views/layout/header.php';
		require_once 'views/layout/nav.php';
		require_once 'views/layout/sidebar.php';
	}


	public static function footer(){
		require_once 'views/layout/footer.php';
	}

}