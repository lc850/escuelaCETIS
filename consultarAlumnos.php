<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
	<?php 
		$server="localhost";
			$username = "root";
			$pass = "";
			$db= "escuela";

			$conexion = new mysqli ($server, $username, $pass, $db);

			if($conexion->connect_error){
					die("Error en la conexión: " . $conexion->connect_error);
			}

			$sql = "SELECT * FROM alumnos";
			$data = $conexion->query($sql); 
			echo '<table class="table table-hover">';
			echo '<thead>';
			echo '<tr>';
			echo '<th>ID</th>';
			echo '<th>Nombre</th>';
			echo '<th>Edad</th>';
			echo '<th>Telefono</th>';
			echo '<th>Sexo</th>';
			echo '<th>Editar</th>';//Opcion para editar
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			while($obj = $data->fetch_object()){
				echo '<tr><td>'.$obj->id.'</td>';
				echo '<td>'.$obj->nombre.'</td>';
				echo '<td>'.$obj->edad.'</td>';
				echo '<td>'.$obj->telefono.'</td>';
				echo '<td>'.$obj->sexo.'</td>';
				echo '<td><a class="btn btn-xs btn-primary" href="editarAlumno.php?id='.$obj->id.'">Editar</a>  <a class="btn btn-xs btn-default" href="eliminar.php?id='.$obj->id.'">Eliminar</a></td></tr>';
			}
	 ?>
	 <script src="js/bootstrap.js"></script>
</body>
</html>











