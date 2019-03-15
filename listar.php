<?php 

	require_once("conexion/conexion.php");

 ?>


 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<title>Listar</title>
 	<link rel="stylesheet" href="css/style.css">

 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 </head>
 <body>
 			<br><br>
 		<h2 align="center">usuarios</h2>
 	
 	 <table width="500" border="2" style="background-color: #f9f9f9;">
		 	<tr>
		 		<th>id</th>
		 		<th>usuario</th>
		 		<th>telefono</th>	
		 		<th>email</th>
		 		<th>editar</th>
		 		<th>borrar</th>
		 	</tr>

		 	<?php 

		 		$consulta = "SELECT * FROM usuario";
		 		$ejecutar = mysqli_query($con,$consulta);
		 		$i = 0;

		 		while($fila = mysqli_fetch_array($ejecutar)){
		 			$id = $fila['id'];
		 			$usuario = $fila['usuario'];
		 			$telefono = $fila['telefono'];
		 			$email = $fila['email'];

		 			$i++;
		 		
		 	 ?>

				<tr align="center">
					<td><?php echo $id; ?></td>
					<td><?php echo $usuario; ?></td>
					<td><?php echo $telefono; ?></td>
					<td><?php echo $email; ?></td>
					<td><a href="crear.php?editar=<?php echo $id; ?>"><i class="fas fa-pencil-alt"></i></a></td>
					<td><a href="crear.php?borrar=<?php echo $id; ?>"><i class="fas fa-trash-alt"></i></a></td>

				</tr>
				<?php } ?>
		 </table>

		 

		<table>
			<tr>
				<td>
					<button><a href="crear.php">Crear un Nuevo Usuario</a></button>
					
				</td>
			</tr>
		</table>


		 
	

 </body>
 </html>

