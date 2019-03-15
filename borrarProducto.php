<?php 	

	
		if(isset($_GET['borrarProducto'])){
			$borrar_id= $_GET['borrarProducto'];

			echo $borrar_id;

			$borrar= "DELETE FROM producto WHERE id='$borrar_id'";

			$ejecutar = mysqli_query($con, $borrar);

			if($ejecutar){
				echo "<script>alert('DATO BORRADO')</script>";
 				echo "<script>window.open('crearProducto.php','_self')</script>";
			}
		}
 ?>