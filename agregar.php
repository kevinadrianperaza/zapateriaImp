<?php include_once("conexion.php"); 
    
    
	$codigo 	= $_POST['txtcod'];
    $nombre 	= $_POST['txtnombre'];
    $precio 	= $_POST['txtprecio'];
    
	mysqli_query($conn, "INSERT INTO productos(cod,nom,pre) VALUES('$codigo','$nombre','$precio')");
    
header("Location:productos.php");
	
?>
