<?php
	require_once('php/set_session.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="librarys/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="librarys/alertifyjs/css/alertify.css">
		<link rel="stylesheet" type="text/css" href="librarys/alertifyjs/css/themes/default.css">
		<link rel="stylesheet" type="text/css" href="librarys/mycss/danielStyle.css">
		<title>OIXXIO</title>
	</head>
	<body>
		<form action="" method="POST">
			<div class="container">
		      <div class="col-xs-12 col-md-4 col-md-offset-4 form-Login">
		         <h1>Login</h1>
		         <div class="form-group">
		           <label>Usurio</label>
		           <input type="text" name="usuario" id="usuario" class="form-control" required>
		         </div>
		         <div class="form-group">
		           <label>password</label>
		            <input type="password" name="password" id="pwss" class="form-control" required>
		         </div>
		        
		         <div class="form-group">
		         	<button class="btn btn-lg btn-primary btn-block" onclick="" id="ingresar">Ingresar</button>
		         </div>

		         <div>
		         	<div class="form-group text-center mb-4">	
		         		<a href="" data-toggle="modal" data-target="#modalNuevo"><u>Crear un cuenta</u></a>
		         	</div>
		         </div>
		      </div>
	 		</div>
 		 </form>

		<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-sm" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Crear cuenta de usuario</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<label>usuario</label>
		      	<input type="text" name="" value="" id="nuevoUsuario" class="form-control input-sm">
		      	<label>password</label>
		      	<input type="password" name="" value="" id="password1" class="form-control input-sm">
		      	<label>Confirmacion de password</label>
		      	<input type="password" name="" value="" id="password2" class="form-control input-sm">
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" data-dismiss="modal" class="form-control input-sm" id="guardarnuevo">
		        	Crear
		    	</button>
		      </div>
		    </div>
		  </div>
		</div>

		<script type="text/javascript" src="librarys/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../js/function.js"></script>	
		<script type="text/javascript" src="librarys/bootstrap/js/bootstrap.js" ></script>
		<script type="text/javascript" src="librarys/alertifyjs/alertify.js"></script>
	</body>
</html>
