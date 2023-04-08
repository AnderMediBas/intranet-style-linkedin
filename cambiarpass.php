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


<form action="p_cambiarpass.php" method="post">

<table  border="1" cellspacing="0" align="center" bgcolor="lightblue" width="600">
	<tr>
		<td>Ingresar Nueva Contraseña</td>
		<td><input type="password" name="txtpass"></td>
	</tr>
	<tr>
		<td>Repetir Nueva Contraseña</td>
		<td><input type="password" name="txtrepass"></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" value="Cambiar password">

		</td>
		
	</tr>
</table>
	

</form>












</body>
</html>