<?php 
include_once("conexion.php");
include_once("productos.php");

$id = $_GET['id'];
 
$querybuscar = mysqli_query($conn, "SELECT * FROM productos WHERE id=$id");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
    $id = $mostrar['id'];
    $codigo = $mostrar['cod'];
    $nombre = $mostrar['nombre'];
	$precio = $mostrar['precio'];
}
?>
<html>
<head>    
		<title>Lista</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="styleproductos.css">
</head>
<body>
<div class="caja_popup2" id="formmodificar">
  <form method="POST" class="contenedor_popup" >
        <table>
		<tr><th colspan="2">Modificar producto</th></tr>
		     <tr> 
                <td>Id</td>
                <td><input type="text" name="txtid" value="<?php echo $id;?>" required ></td>
            </tr>
            <tr> 
                <td>Codigo</td>
                <td><input type="text" name="txtcodigo" value="<?php echo $codigo;?>" required></td>
            </tr>
            <tr> 
                <td>Nombre</td>
                <td><input type="text" name="txtnombre" value="<?php echo $nombre;?>" required></td>
            </tr>
            <tr> 
                <td>Precio</td>
                <td><input type="text" name="txtprecio" value="<?php echo $precio;?>"required></td>
            </tr>
            <tr>
				
                <td colspan="2">
				<a href="productos.php">Cancelar</a>
				<input type="submit" name="btnmodificar" value="Modificar" onClick="javascript: return confirm('¿Deseas modificar este producto?');">
				</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

<?php
	
	if(isset($_POST['btnmodificar']))
{    
    $id1 = $_POST['txtid'];
	
	$codigo1 	= $_POST['txtcodigo'];
    $nombre1 	= $_POST['txtnombre'];
    $precio1 	= $_POST['txtprecio']; 
      
    $querymodificar = mysqli_query($conn, "UPDATE productos SET nom='$nombre1',cod='$codigo1',pre='$precio1' WHERE id=$id1");

  	echo "<script>window.location= 'productos.php' </script>";
    
}
?>
	