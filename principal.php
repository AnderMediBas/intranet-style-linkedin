<?php 
include("auth.php");
include("cabecera.php");
include("conexion.php");
$c=$_SESSION["usuario"];

$sql="select * from user e
	where 
	iduser='$c'";

$f=mysqli_query($cn,$sql);

$r=mysqli_fetch_array($f);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<br>

<center>
Bienvenido(a). 
<?php 

echo $r["nombreempresa"];

 ?>
</center>

<br><br>

<table border="1" cellspacing="0" align="center" bgcolor="lightblue" width="600">
	<tr>
		<td rowspan="6" align="center" valign="middle">
			<img src="./archivos/<?php echo $r["iduser"];?>/perfil/<?php echo $r["iduser"];?>.png" width="150" height="150">
		</td>
		<td align="right">NOMBRE</td>
		<td><?php echo $r["nombreempresa"]; ?> </td>
	</tr>
	<tr>
		
		<td align="right">CATEGORIA</td>
		<td><?php echo $r["categoria"]; ?></td>
	</tr>
	<tr>
		
		<td align="right">DIRECCION</td>
		<td><?php echo $r["direccion"]; ?></td>
	</tr>
	<tr>
		
		<td align="right">TELEFONO</td>
		<td><?php echo $r["telefono"]; ?></td>
	</tr>
	<tr>
		
		<td align="right">EMAIL</td>
		<td><?php echo $r["email"]; ?></td>
	</tr>
</table>

<br>










</body>
</html>