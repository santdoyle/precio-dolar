<?php


class blogmodel{

	private $titulo;
	private $img;
	private $descripcion;


	public function getArticles(){

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://localhost:8080/dolar/blog/wp-json/wp/v2/posts/?per_page=4",
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


}