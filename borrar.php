<?php 	

	
		if(isset($_GET['borrar'])){
			$borrar_id= $_GET['borrar'];

			$borrar= "DELETE FROM usuario WHERE id='$borrar_id'";

			$ejecutar = mysqli_query($con, $borrar);

			if($ejecutar){
				echo "<script>alert('DATO BORRADO')</script>";
 				echo "<script>window.open('crear.php','_self')</script>";
			}
		}
 ?>