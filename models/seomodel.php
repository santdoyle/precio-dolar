<?php
require_once 'config/database.php';

class seo{
	private $nombre;
	private $titulo;
	private $descripcion;
	private $canonical;

	public function __construct(){
		$this->db = database::connect();
	}


	public function getNombre()
	{
	    return $this->nombre;
	}
	public function setNombre($nombre)
	{
	    $this->nombre = $nombre;
	    return $this;
	}

	public function getTitulo()
	{
	    return $this->titulo;
	}
	public function setTitulo($titulo)
	{
	    $this->titulo = $titulo;
	    return $this;
	}

	public function getDescripcion()
	{
	    return $this->descripcion;
	}
	public function setDescripcion($descripcion)
	{
	    $this->descripcion = $descripcion;
	    return $this;
	}

	public function getCanonical()
	{
	    return $this->canonical;
	}
	public function setCanonical($canonical)
	{
	    $this->canonical = $canonical;
	    return $this;
	}

	public function selectAll(){
		$sql = "SELECT * FROM seo WHERE nombre='{$this->getNombre()}';";
		$consulta = $this->db->query($sql);

		$data = array();
		if ($consulta->num_rows >= 1) {
			$data = $consulta;
		}else{
			$data = null;
		}

		return $data;
	}



}