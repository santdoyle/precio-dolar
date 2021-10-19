<?php
require_once 'autoload.php';
require_once 'config/parameters.php';

if (isset($_GET['controller'])) {

		$claseControlador =  $_GET['controller'];
	
	}elseif(!isset($_GET['controller']) &&  !isset($_GET['action'])) {
			
			$claseControlador =  controller_default;

	}else{

		echo "Error, el controlador no existe";	
	}

	if(class_exists($claseControlador)) {

		$controlador = new $claseControlador();

		if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
			$action = $_GET['action']; 
			$controlador->$action();
		
		}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
			$actionDefault = action_default;
			$controlador->$actionDefault();

		}else{
			echo "El método action no es correcto";
		}
	
	}else{
		echo "El objeto controlador no existe";
	}


