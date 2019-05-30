<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de alumnos</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Escuela</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="consultarAlumnos.php">Consultar alumnos <span class="sr-only">(current)</span></a></li>
        <li><a href="registro.php">Registrar Alumno</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="registro.php">Registrar alumno</a></li>
            <li><a href="consultarAlumnos.php">Consultar alumnos</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<div class="container">
		<div class="row well">
			<div class="col-md-6 col-md-offset-3">
				<form action="guardar.php" method="POST">
					<div class="form-group">
						<label for="Nombre">Nombre:</label>
						<input type="text" name="nombre" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Edad</label>
						<input type="number" name="edad" class="form-control">
					</div>
					<div class="form-group">
						<label for="Telefono">Telefono</label>
						<input type="text" name="telefono" class="form-control">
					</div>
					<div class="form-group">
						<label for="Sexo">Sexo</label>
						<select name="sexo" id="" class="form-control">
							<option value="0">Femenino</option>
							<option value="1">Masculino</option>
						</select>
					</div>
					<div class="form-group text-center">
						<input type="submit" class="btn btn-primary" value="Registrar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="js/bootstrap.js"></script>
</body>
</html>