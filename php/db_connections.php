<?php
	
	function connectionToMysqli() {

		define('DB_HOST', 'localhost');
		define('DB_DATABASE','oixxio');
		define('DB_USER','root');
		define('DB_PASSWORD','');

		$mysqli = new mysqli( DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE );

		if(!$mysqli) {
			echo 'Error de conexion' . mysql_error();
			exit;
		} 

		return $mysqli;
	}

	function select_Mysqli() {

		$connectionMysqli = connectionToMysqli();
		$sql = 'SELECT * FROM visita';
		$result = $connectionMysqli->query($sql);
		$connectionMysqli->close();
		return $result;
	}

	function insert_Mysqli( $nombre, $empresa, $cargo, $telefono, $email, $tipoVisita, $tipo, $tipoConsulta, $observacion ) {
		$connectionMysqli = connectionToMysqli();
		$sql = "INSERT INTO visita (id, nombre, empresa, cargo, telefono, email, tipoVisita, tipo, tipoConsulta, observaciones) 
							VALUES( null, '{$nombre}', '{$empresa}', '{$cargo}', '{$telefono}', '{$email}', '{$tipoVisita}', '{$tipo}', '{$tipoConsulta}', '{$observacion}')";
		$result = $connectionMysqli->query($sql);
		$connectionMysqli->close();
		return $result;
	}
?>