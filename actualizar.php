<?php 
include("auth.php");
include("cabecera.php");
include("conexion.php");


$c=$_SESSION["usuario"];



$sql="select * from user e
	where 
	e.iduser='$c'";

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




<br>


<form action="p_actualizar.php" method="post">

	<table  border="1" cellspacing="0" align="center" bgcolor="lightblue" width="600">
		<tr>
			<td colspan="3">Nombre de Empresa: 
				<input type="text" name="nombre" value="<?php echo $r["nombreempresa"]; ?>">

			</td>
			
		</tr>
		
		<tr>
			<td colspan="3">Direccion: 
				<input type="text" name="direccion" value="<?php echo $r["direccion"]; ?>">

			</td>
			
		</tr>
		<tr>
			<td colspan="3">Telefono: 
				<input type="text" name="telefono" value="<?php echo $r["telefono"]; ?>">

			</td>
			
		</tr>
		<tr>
			<td colspan="3">Email: 
				<input type="text" name="email" value="<?php echo $r["email"]; ?>">

			</td>
			
		</tr>
	</table>

	<center><input type="submit" value="Actualizar"></center>


</form>












</body>
</html>