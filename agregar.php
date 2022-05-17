<?php include_once("conexion.php"); 
    
    $id         = $_POST['txtid'];
	$codigo 	= $_POST['txtcod'];
    $nombre 	= $_POST['txtnombre'];
    $precio 	= $_POST['txtprecio'];
    
	mysqli_query($conn, "INSERT INTO productos(id,cod,nom,pre) VALUES('$id','$codigo','$nombre','$precio')");
    
header("Location:productos.php");
	
?>
