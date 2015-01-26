<?php
define("IVA",0.16);
  
$nombre=$_POST["nombre"];
$ape_paterno=$_POST["ape_paterno"];
$ape_materno=$_POST["ape_materno"];
$edad=$_POST["edad"];
$dia=$_POST["dia"];
$no_licencia=$_POST["no_licencia"];
$fecha_licencia=$_POST["fecha_licencia"];
$carrera=$_POST["carrera"];
$mensaje=$_POST["mensaje"];

?>

<html>
<body>
<table border="1">
<tr>
<td></td>
<td>Nombre</td>
<td>Apellido Paterno</td>
</tr>
<tr>
<td>1</td>
<td><?php echo $nombre ?></td>
<td><?php echo $ape_paterno ?></td>
</tr>
<tr>
<td>2</td>
<td><?php echo $producto2 ?></td>
<td><?php echo $precio2 ?></td>
</tr>
<tr>
<td>3</td>
<td><?php echo $producto3 ?></td>
<td><?php echo $precio3 ?></td>
</tr>
<tr>
<td></td>
<td>subtotal</td>
<td><?php echo ("$".$subtotal); ?></td>
</tr>
<tr>
<td></td>
<td>IVA</td>
<td><?php echo ("$".$iva); ?></td>
</tr>
<tr>
<td></td>
<td>total</td>
<td><?php echo ("$".$total); ?></td>
</tr>
</table>
</body>
</html>