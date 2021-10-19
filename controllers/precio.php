<?php
require_once 'config/layoutclass.php';
require_once 'models/seomodel.php';
require_once 'models/historicomodel.php';
require_once 'models/blogmodel.php';

class precio{

	public function getData(){
		$getData = new historico();
		$data = $getData->verPrecio();
		$precioDolar = json_decode($data);

		//Prueba seteo de datos para guardar e hsitorico	
		$getData = new historico();
		$data = $getData->verPrecio();
		$precioDolar = json_decode($data, true);

			foreach ($precioDolar as $dolar) {
				$compra = str_replace(",", ".", $dolar['casa']['compra']);
				$venta = str_replace(",", ".", $dolar['casa']['venta']);

				if ($dolar['casa']['nombre'] == "Dolar Oficial"){
					
					$id = 2;
					$getData->setId_dolar($id);
					$getData->setCompra($compra);
					$getData->setVenta($venta);
					$getData->setFecha(date("Y-m-d"));
					$prueba = $getData->guardarHistorico();

				}elseif ($dolar['casa']['nombre'] == "Dolar Blue"){
					$id = 4;

					$getData->setId_dolar($id);
					$getData->setCompra($compra);
					$getData->setVenta($venta);
					$getData->setFecha(date("Y-m-d"));
					$prueba = $getData->guardarHistorico();

				}elseif ($dolar['casa']['nombre'] == "Dolar Contado con Liqui"){
					$id = 6;
					$getData->setId_dolar($id);
					$getData->setCompra($compra);
					$getData->setVenta($venta);
					$getData->setFecha(date("Y-m-d"));
					$prueba = $getData->guardarHistorico();

				}elseif ($dolar['casa']['nombre'] == "Dolar turista") {
					$id = 5;
					$compraDt = "";
					if ($dolar['casa']['compra'] == "No cotiza") {
						$compraDt = null;
						$getData->setCompra($compraDt);
					}
					$getData->setId_dolar($id);
					
					$getData->setVenta($venta);
					$getData->setFecha(date("Y-m-d"));
					$prueba = $getData->guardarHistorico();

				}
			}

			echo $data;
		
	}


	public function oficial(){
		layout::sections();

		$dolar = "";
		if (empty($_GET['action'])) {
			$dolar = "inicio";
		}else{
			$dolar = strtolower($_GET['action']);

			if ($dolar = "oficial") {
				$id = 2;
			}
		}

		//Select a db para datos seo por pagina
		$getData = new seo();
		$getData->setNombre($dolar);
		$dataSeo = $getData->selectAll();

		//Select de artículos a wp api
		$posts = new blogmodel();
		$data = $posts->getArticles();

		$articulos = json_decode($data, true);

		//Select data de historico
		$historicoOf = new historico();
		$historicoOf->setId_dolar($id);
		$json = $historicoOf->historico();
		$dataHistorico = json_decode($json, true);

		require_once 'views/dolaroficialview.php';

		layout::footer();
	}

	public function blue(){
		layout::sections();

		$dolar = "";
		if (empty($_GET['action'])) {
			$dolar = "inicio";
		}else{
			$dolar = strtolower($_GET['action']);
			if ($dolar = "blue") {
				$id = 4;
			}
		}

		$getData = new seo();
		$getData->setNombre($dolar);
		$dataSeo = $getData->selectAll();

		//Select de artículos a wp api
		$posts = new blogmodel();
		$data = $posts->getArticles();
		$articulos = json_decode($data, true);

		//Select data de historico
		$historicoBlue = new historico();
		$historicoBlue->setId_dolar($id);
		$json = $historicoBlue->historico();
		$dataHistorico = json_decode($json, true);

		require_once 'views/dolarblueview.php';

		layout::footer();
	}

	public function turista(){
		layout::sections();

		$dolar = "";
		if (empty($_GET['action'])) {
			$dolar = "inicio";
		}else{
			$dolar = strtolower($_GET['action']);
			if ($dolar = "turista") {
				$id = 5;
			}
		}

		$getData = new seo();
		$getData->setNombre($dolar);
		$dataSeo = $getData->selectAll();

		//Select de artículos a wp api
		$posts = new blogmodel();
		$data = $posts->getArticles();
		$articulos = json_decode($data, true);

		//Select data de historico
		$historicoTur = new historico();
		$historicoTur->setId_dolar($id);
		$json = $historicoTur->historico();
		$dataHistorico = json_decode($json, true);

		require_once 'views/dolarturistaview.php';

		layout::footer();
	}


	public function ccl(){
		layout::sections();

		$dolar = "";
		if (empty($_GET['action'])) {
			$dolar = "inicio";
		}else{
			$dolar = strtolower($_GET['action']);
			if ($dolar = "ccl") {
				$id = 6;
			}
		}

		$getData = new seo();
		$getData->setNombre($dolar);
		$dataSeo = $getData->selectAll();

		//Select de artículos a wp api
		$posts = new blogmodel();
		$data = $posts->getArticles();
		$articulos = json_decode($data, true);

		//Select data de historico
		$historicoTur = new historico();
		$historicoTur->setId_dolar($id);
		$json = $historicoTur->historico();
		
		$dataHistorico = json_decode($json, true);

		require_once 'views/dolarcclview.php';

		layout::footer();
	}


	public function fetchGrafic(){
		$dolar = "";
		if (empty($_GET['id'])) {
			$dolar = "inicio";
		}else{
			$dolar = $_GET['id'];	
		}

		$jsonData = new historico();
		$jsonData->setId_dolar($dolar);
		$data = $jsonData->historico();

		echo $data;
	}


	/*public function setHistorico(){
		$file = isset($_FILES['historico']['tmp_name']) ? $_FILES['historico']['tmp_name'] : false;
		
		$archivo = fopen($file, "r");
		
		while (($row = fgetcsv($archivo, 10000, ";")) != false) {
			//$compra = str_replace(",", ".", $row['1']);
			$venta = str_replace(",", ".", $row['1']);

			$insert = new historico();
			//$insert->setCompra($compra);
			$insert->setVenta($venta);
			$insert->setFecha($row['0']);
			
			$dataHistorico = $insert->guardarHistorico();
			var_dump($dataHistorico);

		}

	}*/

}