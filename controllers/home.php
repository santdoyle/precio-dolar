<?php
require_once 'config/layoutclass.php';
require_once 'models/blogmodel.php';
require_once 'models/historicomodel.php';

class home{

	public function __construct(){
		layout::sections();
	}

	public function ver(){
		$posts = new blogmodel();
		$data = $posts->getArticles();

		$articulos = json_decode($data, true);
		
		require_once 'views/homeview.php';
		layout::footer();
	}




}