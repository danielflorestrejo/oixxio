<?php
	require_once('db_connections.php');
	session_start();
	$usuario = $_POST[''];
	$password = $_POST[''];
	$result = validate_login($usuario, $password);
	if($result == 0) {
		echo "string";
	} else {
		$_SESSION['name'] = $result;
		echo "string";
	}
?>