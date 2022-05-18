<?php
include_once("conexion.php"); 
?>

<html>
<head>    
		<title>Lista Zapatos</title>
		<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="bootstrap-tour/css/bootstrap-tour-standalone.min.css">
        <link rel="stylesheet" href="styleproductos.css">
        <script src="jquery/jquery-1.8.2.min.js"></script>
        <script src="bootstrap-tour/js/bootstrap-tour-standalone.min.js"></script>
        <script src="ManualProductos.js"></script>
</head>
<body>
<button id="Manual" onclick="IniciaManualProductos()">Manual </button>
    <table>
	<div id="Paso1" align="right"><a href="index.php">REGRESAR</a></div>
    <hr>
    <div><img src="./img/zapateria.png"></div>
    
    <hr>
			<div id="barrabuscar" >
		<form method="POST">
		<input id="Paso5"  type="submit" value="Buscar" name="btnbuscar"><input type="text" name="txtbuscar" id="cajabuscar" placeholder="&#128270;Ingresar nombre de producto" d="Paso5" >
		</form>
		</div>
			<tr><th colspan="5"><h1>LISTAR ZAPATOS</h1><th><a id="Paso2" style="font-weight: normal; font-size: 14px;" onclick="abrirform()">Agregar</a></th></tr>
			<tr>
		    <th>Num</th>
			<th>ID</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Acción</th>
			</tr>
        <?php 

if(isset($_POST['btnbuscar']))
{
$buscar = $_POST['txtbuscar'];
$queryusuarios = mysqli_query($conn, "SELECT id,nom,cod,pre FROM productos where nom like '".$buscar."%'");
}
else
{
$queryusuarios = mysqli_query($conn, "SELECT * FROM productos ORDER BY id asc");
}
		$numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{    $numerofila++;    
            echo "<tr>";
			echo "<td>".$numerofila."</td>";
            echo "<td>".$mostrar['id']."</td>"; 
            echo "<td>".$mostrar['cod']."</td>";
            echo "<td>".$mostrar['nom']."</td>";
            echo "<td>".$mostrar['pre']."</td>";     
            echo "<td style='width:26%'><a id='Paso3' href=\"editar.php?id=$mostrar[id]\">Modificar</a> | <a id='Paso4' href=\"eliminar.php?id=$mostrar[id]\" onClick=\"return confirm('¿Estás seguro de eliminar $mostrar[nom]?')\">Eliminar</a></td>";           
}
        ?>
    </table>
	 <script>
function abrirform() {
  document.getElementById("formregistrar").style.display = "block";
  
}

function cancelarform() {
  document.getElementById("formregistrar").style.display = "none";
}

</script>
<div class="caja_popup" id="formregistrar">
  <form action="agregar.php" class="contenedor_popup" method="POST">
        <table>
		<tr><th colspan="2">Nuevo producto</th></tr>
            
            <tr> 
                <td>Código</td>
                <td><input type="text" name="txtcod" required></td>
            </tr>
            <tr> 
                <td>Nombre</td>
                <td><input type="text" name="txtnombre" required></td>
            </tr>
            <tr> 
                <td>Precio</td>
                <td><input type="number" name="txtprecio" required></td>
            </tr>
            <tr> 	
               <td colspan="2">
				   <button type="button" onclick="cancelarform()">Cancelar</button>
				   <input type="submit" name="btnregistrar" value="Registrar" onClick="javascript: return confirm('¿Deseas registrar este producto?');">
			</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

