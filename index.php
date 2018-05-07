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
		<form action="php/visits.php" method="POST">
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
		         <button class="btn btn-lg btn-primary btn-block" id="ingresar">Ingresar</button>
		      </div>
	 		 </div>
 		 </form>
		<script type="text/javascript" src="librarys/jquery-3.3.1.min.js"></script>	
		<script type="text/javascript" src="librarys/bootstrap/js/bootstrap.js" ></script>
		<script type="text/javascript" src="librarys/alertifyjs/alertify.js"></script>
	</body>
</html>
