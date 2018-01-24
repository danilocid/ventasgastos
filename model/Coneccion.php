<?php

class Conexion
{
	public function __construct($server, $nombreDB, $user, $pass ){
		$con = mysql_connect($server, $user, $pass);

		if (!$con) {
			die("Error al conectar: ". mysql_error());
		}

		$selDB = mysql_select_db($nombreDB);

		if(!$selDB){
			die("Error al seleccionar la DB".mysql_error());
	}
}

	public function ejecutar($query){
		return mysql_query($query);
	}

	
}

?>