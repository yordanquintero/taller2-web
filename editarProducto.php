<?php 

	if(isset($_GET['editarProducto'])){

		$editarProducto_id = $_GET['editarProducto'];
		$consulta ="SELECT * FROM producto WHERE id='$editarProducto_id'";
		$ejecutar = mysqli_query($con, $consulta);

		$fila=mysqli_fetch_array($ejecutar);

		$producto=$fila['nombre'];
		$precio = $fila['precio'];
		$cantidad = $fila['cantidad'];
	}

 ?>

 <br><br>

 <h2>Editar pruducto</h2>

 <form method="post" action="">

 	<input type="text" name="nombre" value="<?php echo  $producto?>"><br>
 	<input type="text" name="precio" value="<?php echo $precio ?>"><br>
 	<input type="text" name="cantidad" value="<?php echo $cantidad ?>"><br><br>
 	<input type="submit" name="actualizarp" value="ACTUALIZAR DATOS">
 </form>

 <?php 

 	if (isset($_POST['actualizarp'])){

 		echo $editarProducto_id;
 		
 		$actualizar_producto=$_POST['nombre'];
 		$actualizar_precio=$_POST['precio'];
 		$actualizar_cantidad=$_POST['cantidad'];

 		$actualizar= "UPDATE producto SET nombre='$actualizar_producto',precio='$actualizar_precio',cantidad='$actualizar_cantidad' WHERE id='$editarProducto_id'";

 		$ejecutar=mysqli_query($con, $actualizar);

 		if($ejecutar){
 			echo "<script>alert('DATOS ACTUALIZADOS')</script>";
 			echo "<script>window.open('crearProducto.php','_self')</script>";
 
 		}
 	}



  ?>