<?php


class database{

	public static function connect(){
		$db = new mysqli('localhost', 'root', '', 'comprarDolares');

		if (mysqli_connect_error()) {
        	exit('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
    	}

		$db->query("SET NAMES 'utf8'");

		return $db;

	}
}