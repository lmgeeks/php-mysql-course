<?php

	//Conexion a la DB
	const SERVER = 'localhost';
	const USERNAME = 'root';
	const PASSWORD = '';
	const DATABASE = 'catalogo';

	function conectar()
	{
		$link = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);

		return $link;
		
	}
?>