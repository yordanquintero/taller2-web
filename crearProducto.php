<!DOCTYPE html>
<meta charset="utf-8">

<?php 

	require_once("conexion/conexion.php");

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>crud producto</title>
 	<link rel="stylesheet" href="css/style.css">

 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 </head>
 <body>

	<h2>Crear Producto</h2>
		<form method="POST" action="crearProducto.php"> 
		<label>Nombre:</label>
		<input type="text" name="nombre"placeholder="Nombre"><br><br>
		<label>Precio:</label>
		<input type="number" name="precio"placeholder="precio"><br><br>
		<label>cantidad:</label>
		<input type="number" name="cantidad" placeholder="cantidad"><br><br>
		<input type="submit" name="insertp" class="insertarProducto" value="INSERTAR DATOS">
		</form>

		<?php 
			if(isset($_POST['insertp'])){

				$producto = $_POST['nombre'];
				$precio = $_POST['precio'];
				$cantidad = $_POST['cantidad'];

				$insertar = "INSERT INTO producto (nombre,precio,cantidad)VALUES('$producto','$precio','$cantidad')";
				$ejecutar = mysqli_query($con, $insertar);

				header("Location: listarProducto.php");
			}
		 ?>

		  <br>
		 <button> <a href="listarProducto.php">Mostrar productos</a> </button>
		 <button style="margin: 10px"><a href="inicio.php">Inicio</a></button>

		 <?php 

		if(isset($_GET['editarProducto'])){

			include("editarProducto.php");
		}

		if(isset($_GET['borrarProducto'])){
			include("borrarProducto.php");
		}

	 ?>





 	
 </body>
 </html>
