<!DOCTYPE html>
<meta charset="utf-8">

<?php 

	require_once("conexion/conexion.php");

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>crud php</title>
 	<link rel="stylesheet" href="css/style.css">
 	
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 </head>
 <body>
 		<h2>Crear usuario</h2>
		<form method="POST" action="crear.php"> 
		<label>Nombre:</label>
		<input type="text" name="Nombre"placeholder="Nombre"><br><br>
		<label>telefono:</label>
		<input type="number" name="telefono"placeholder="telefono"><br><br>
		<label>email:</label>
		<input type="email" name="email" placeholder="email"><br><br>
		<input type="submit" name="insert" class="insertar" value="INSERTAR DATOS">
		</form>

		<?php 
			if(isset($_POST['insert'])){
				$usuario = $_POST['Nombre'];
				$telefono = $_POST['telefono'];
				$email = $_POST['email'];

				$insertar = "INSERT INTO usuario (usuario,telefono,email)VALUES('$usuario','$telefono','$email')";
				$ejecutar = mysqli_query($con, $insertar);

				header("Location: listar.php");
			}

		 ?>

		 <br>

		 <button> <a href="listar.php">Mostrar Usuarios</a> </button>
		 <button style="margin: 10px"><a href="inicio.php">Inicio</a></button>

		 <?php 

		if(isset($_GET['editar'])){

			include("editar.php");
		}

		if(isset($_GET['borrar'])){
			include("borrar.php");
		}

	 ?>

		
 
 </body>
 </html>