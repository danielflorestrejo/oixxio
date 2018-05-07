<?php
	require_once('db_connections.php');

	 $nombre       = $_POST['nombre'];
	 $empresa      = $_POST['empresa'];
	 $cargo        = $_POST['cargo'];
	 $telefono     = $_POST['telefono'];
	 $email        = $_POST['email'];

	 $tipoVisita   = "-" . $_POST['consultoria'] . "-" . $_POST['simuladores'] . "-" . $_POST['gestion'] . "-" . $_POST['otroVisita'] . "-";

	 $tipo          =  "-" . $_POST['sass'] . "-" . $_POST['sfactory'] . "-";

	 $tipoConsulta  =  "-" . $_POST['presupuesto'] .  "-" . $_POST['tecnico'] .  "-" . $_POST['demo'] .  "-" . $_POST['otroConsulta'] .  "-";

	 $observacion  =  "-" . $_POST['observaciones'] . "-";

	 $result = insert_Mysqli( $nombre, $empresa, $cargo, $telefono, $email, $tipoVisita, $tipo, $tipoConsulta, $observacion );
	 echo $result;
?>
