<?php
include_once("conexion.php");
 
$id = $_GET['id'];
 
mysqli_query($conn, "DELETE FROM productos WHERE id=$id");
 
header("Location:productos.php");

?>