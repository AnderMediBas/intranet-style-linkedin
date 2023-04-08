<?php 
include("auth.php");
include("cabecera.php");
include("conexion.php");


$c=$_SESSION["usuario"];
$reporte="select * from propuesta p join user u on p.iduser=u.iduser";  
$resultado= mysqli_query($cn,$reporte);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/reporte.css">
	<title>Reporte Laboral</title>
</head>
<body>
	<br>
	<br>
	<br>
	<div>
		<center>
		<div class="container-reporte">

			<table >
				<tr>
					<th class="t-header t-items">Titulo</th>
					<th class="t-header t-items">Empresa</th>
					<th class="t-header t-items">Fecha</th>
					<th class="t-header t-items">items</th>
				</tr>
				<?php
				// while ($mostrar = mysqli_fetch_row($rta)) {
				while($row=mysqli_fetch_assoc($resultado)){	
				?>
				<tr>
					<td class="t-items" style="font-size:10px; max-width: 200px"100px"><?php echo $row["nombrepropuesta"]?></td>
					<td class="t-items" style="font-size:10px; max-width: 200px"100px"><?php echo $row["nombreempresa"]?></td>
					<td class="t-items" style="font-size:10px; max-width: 200px"100px"><?php echo $row["fechapropuesta"]?></td>
					<td class="t-items">
					<a href="./oferta.php?id=<?php echo $row["idpropuesta"]?>" style="padding:0 10px;margin:10px;background-color:black;text-decoration:none;color: #fff">Visualizar</a>	
					</td>
				</tr>
	
				<?php
				}
				?>
				
			</table>
		</div>
	</center>
	</div>


</body>
</html>