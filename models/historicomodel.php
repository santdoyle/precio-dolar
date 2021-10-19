<?php


class historico{

	private $id_dolar;
	private $compra;
	private $venta;
	private $fecha;

	public function __construct(){
		$this->db = database::connect();
	}

	public function getId_dolar()
	{
	    return $this->id_dolar;
	}
	public function setId_dolar($id_dolar)
	{
	    $this->id_dolar = $this->db->real_escape_string($id_dolar);
	    return $this;
	}

	public function getCompra()
	{
	    return $this->compra;
	}
	public function setCompra($compra)
	{
	    $this->compra = $this->db->real_escape_string($compra);
	    return $this;
	}

	public function getVenta()
	{
	    return $this->venta;
	}
	public function setVenta($venta)
	{
	    $this->venta = $this->db->real_escape_string($venta);
	    return $this;
	}

	public function getFecha()
	{
	    return $this->fecha;
	}
	public function setFecha($fecha)
	{
	    $this->fecha = $this->db->real_escape_string($fecha);
	    return $this;
	}

	public function verPrecio(){

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://www.dolarsi.com/api/api.php?type=valoresprincipales",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_SSL_VERIFYHOST => 0,
      	  CURLOPT_SSL_VERIFYPEER => 0,
		));

		$response = curl_exec($curl);

		curl_close($curl);
		
		return $response;

	}


	public function historico(){
		$sql = "SELECT * FROM historico WHERE id_dolar = '{$this->getId_dolar()}' ORDER BY fecha ASC;";
		$consulta = $this->db->query($sql);

		$data = array();
		while ($row = mysqli_fetch_assoc($consulta)) {
			$data[] = array(
				'id' => $row['id'],
				'compra' => $row['compra'],
				'venta' => $row['venta'],
				'fecha' => $row['fecha'],
			);
		}

		$json = json_encode($data);

		return $json;

		/*
		Database comprar dolares raiola
		porcient_dolarweb
		
		b0c8ZNXw#cfE

		Database comprar dolares local
		passDb: uEoRp8SlZtGS9K92
		userWp: dolareshoyblog
		passwp: of(^HCccbrccH6Vt!E

		Darabase blog
		porcient_dolarblog
		porcient_dolarbloguser
		{vYdNg;ff4xb	
		*/
	}


	public function guardarHistorico(){
		$selectDate = "SELECT fecha FROM historico WHERE fecha='{$this->getFecha()}' AND id_dolar='{$this->getId_dolar()}';";
		$consultaDate = $this->db->query($selectDate);


		if ($consultaDate->num_rows == 0) {
			$sql = "INSERT INTO historico VALUES(null, '{$this->getId_dolar()}', '{$this->getCompra()}', '{$this->getVenta()}', '{$this->getFecha()}');";
			$consulta = $this->db->query($sql);

			return $consulta;

		}else{
			return null;
		}
		
	}
}