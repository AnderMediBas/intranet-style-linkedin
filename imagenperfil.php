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


<form action="p_imagenperfil.php" method="post" enctype="multipart/form-data">

	<table  border="1" cellspacing="0" align="center" bgcolor="lightblue" width="600">
		<tr>
			<td>Escoger la foto(formato png)</td>
			<td><input type="file" name="archivo"></td>
			<td><input type="submit" value="Cambiar foto de perfil"></td>
		</tr>
	</table>
</form>












</body>
</html>