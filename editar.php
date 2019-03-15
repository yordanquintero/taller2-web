<?php 

	if(isset($_GET['editar'])){

		$editar_id = $_GET['editar'];
		$consulta ="SELECT * FROM usuario WHERE id='$editar_id'";
		$ejecutar = mysqli_query($con, $consulta);

		$fila=mysqli_fetch_array($ejecutar);

		$usuario=$fila['usuario'];
		$telefono = $fila['telefono'];
		$email = $fila['email'];
	}
 ?>

 <br><br>

 <h2>Editar Usuario</h2>

 <form method="post" action="">

 	<input type="text" name="nombre" value="<?php echo  $usuario?>"><br>
 	<input type="text" name="telefono" value="<?php echo $telefono ?>"><br>
 	<input type="text" name="email" value="<?php echo $email ?>"><br><br>
 	<input type="submit" name="actualizar" value="ACTUALIZAR DATOS">
 </form>

 <?php 

 	if (isset($_POST['actualizar'])){
 		
 		$actualizar_nombre=$_POST['nombre'];
 		$actualizar_telefono=$_POST['telefono'];
 		$actualizar_email=$_POST['email'];

 		$actualizar= "UPDATE usuario SET usuario='$actualizar_nombre',telefono='$actualizar_telefono',email='$actualizar_email' WHERE id='$editar_id'";

 		$ejecutar=mysqli_query($con, $actualizar);

 		if($ejecutar){
 			echo "<script>alert('DATOS ACTUALIZADOS')</script>";
 			echo "<script>window.open('crear.php','_self')</script>";
 		}
 	}



  ?>