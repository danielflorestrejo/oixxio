<?php
 	require_once('../php/db_connections.php');
 	$loadTable = select_Mysqli();
?>
<div class="table-responsive">
	<table class="table table-condensed table-bordered">
		<tr class="color-head">
			<th>Nombre</th>
			<th>Empresa</th>
			<th>Cargo</th>
			<th>Telefono</th>
			<th>email</th>
			<th>Visita</th>
			<th>tipo</th>
			<th>Consulta</th>
			<th>Observacion</th>
		</tr>
		<?php
			while ($dataTable = $loadTable->fetch_assoc()) {?>
			<tr>
				<td><?php echo $dataTable['nombre']; ?></td>
				<td><?php echo $dataTable['empresa']; ?></td>
				<td><?php echo $dataTable['cargo']; ?></td>
				<td><?php echo $dataTable['telefono']; ?></td>
				<td><?php echo $dataTable['email']; ?></td>
				<td><?php echo $dataTable['tipoVisita']; ?></td>
				<td><?php echo $dataTable['tipo']; ?></td>
				<td><?php echo $dataTable['tipoConsulta']; ?></td>
				<td><?php echo $dataTable['observaciones']; ?></td>
			</tr>
			<?php } ?>
	</table>
</div>
