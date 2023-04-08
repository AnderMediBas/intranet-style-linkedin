<?php 


if (isset($_GET["m"])) {
	


$msj=$_GET["m"];

echo $msj;


}




 ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>
<body>


<center>
	
	<img src="linkedin.png" width="180" height="180">
	<br>
	<h1>LinkedIn</h1>

</center>

<BR>

<form action="p_login.php" method="post">


<fieldset id="grupo">
	
   <center>
	  <input type="text" name="txtusuario" class="txt">
	  <input type="password" name="txtpass" class="pwd">
	  <input type="submit" value="Iniciar Sesión" class="btn">
	  <br>
	  <a href="registro.php" style="float: right;">Crear una cuenta </a>
   </center>


</fieldset>	


</form>









</body>
</html>