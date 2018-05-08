<?php
	require_once('set_session.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="../librarys/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../librarys/alertifyjs/css/alertify.css">
		<link rel="stylesheet" type="text/css" href="../librarys/alertifyjs/css/themes/default.css">
		<link rel="stylesheet" type="text/css" href="../librarys/mycss/danielStyle.css">
		<title>OIXXIO</title>
	</head>
	<body>
		<form id="formVisits">
		<div class="container">

			<div class="col-xs-12 col-md-6 col-md-offset-2">
				<h1>Visitas</h1>
			</div>

			<div class="col-xs-12 col-md-6 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Cliente</div>
					<div class="panel-body">
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" name="" class="form-control" id="nombre" required>
						</div>
						<div class="form-group">
							<label>Empresa</label>
							<input type="text" name="" class="form-control" id="empresa" required>
						</div>
						<div class="form-group">
							<label>Cargo</label>
							<input type="text" name="" class="form-control" id="cargo" required>
						</div>
						<div class="form-group">
							<label>Telefono</label>
							<input type="text" name="" class="form-control" id="telefono" required>
						</div>
						<div class="form-group">
							<label>email</label>
							<input type="email" name="" class="form-control" id="email" required>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-md-6 col-md-offset-2">
				<div class="panel panel-default">

					<div class="panel-heading">Tipo de Visita</div>

				  	<div class="panel-body">
				  		<div class="form-group">
				  			<div class="form-check">
								<input class="form-check-input" type="checkbox" name="" value="" id="consultoria">
								<label class="form-check-label" for="exampleCheck1">
									Consultoria
								</label>
							</div>
							
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="" value="" id="simuladores">
								<label class="form-check-label" for="exampleCheck1">
									Simuladores
								</label>
							</div>

							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="" value="" id="gestion">
								<label class="form-check-label" for="exampleCheck1">
									Sist. Gestion
								</label>
							</div>

							<div class="form-check">
								<div class="input-group">
									<span class="input-group-addon">
										 <input type="checkbox" id="visitaDistinta" onclick="document.getElementById('otroVisita').disabled = !this.checked">
										 <label class="form-check-label" for="exampleCheck1">
										 	Otros
										 </label>	
								    </span>
									<input type="text" disabled class="form-control" name="" id="otroVisita">
								</div>
							</div>

				  		</div>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-md-6 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Tipo </div>
					<div class="panel-body">
						<div class="form-group">

							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="sass">
								<label class="form-check-label" for="defaultCheck1">
									SASS
								</label>
							</div>

							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="sfactory">
								<label class="form-check-label" for="defaultCheck1">
									S.Factory
								</label>
							</div>

						</div>
					</div>
				</div>
			</div>
			
	       <div class="col-xs-12 col-md-6 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Tipo de Consulta</div>
					<div class="panel-body">
						<div class="form-group">

							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="presupuesto">
								<label class="form-check-label" for="defaultCheck1">
									Presupuesto
								</label>
							</div>
							
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="tecnico">
								<label class="form-check-label" for="defaultCheck1">
									Cont. Tecnico
								</label>
							</div>
							
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="demo">
								<label class="form-check-label" for="defaultCheck1">
									Demo
								</label>
							</div>
							
							<div class="form-check">
								<div class="input-group">
									<span class="input-group-addon">
										 <input type="checkbox" name="" id="otroConsultac" onclick="document.getElementById('otroConsulta').disabled = !this.checked">
										 <label class="form-check-label" for="exampleCheck1">
										 	Otros
										 </label>
								    </span>
									<input type="text" disabled class="form-control" name="" id="otroConsulta" >
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-md-6 col-md-offset-2">
				<div class="panel panel-default">
			   	 	<div class="panel-body">
						<label for="comment">Observaciones:</label>
						<textarea class="form-control" name="" id="observaciones" rows="3"></textarea>
			  		</div>
		   		</div>
			</div>

		    <div class="col-xs-12">
				 <div class="col-xs-12 col-md-6 col-md-offset-2">
				 	<div class="form-group">
						<button class="btn btn-lg btn-primary btn-block" id="aceptar" onclick="addVisitsAndShowTable();">Enviar</button>
					</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-md-6 col-md-offset-2">
					<div id="tabla"></div>
			</div>

	  </div>
	  </form>
		<script type="text/javascript" src="../librarys/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../js/function.js"></script>	
		<script type="text/javascript" src="../librarys/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="../librarys/alertifyjs/alertify.js"></script>
	</body>
</html>
