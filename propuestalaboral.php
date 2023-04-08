<?php
include("auth.php");
include("cabecera.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/propuestalaboral.css">
	<title>Propuesta Laboral</title>
</head>
<body>

<br>
<center>
    <div class="container-propuestalaboral">
        <form action="./p-propuesta.php" method="post"><br>
            <label  style="color: white; font-size: 20px;">Nombre de Propuesta</label><br><br>
            <input class="txtText" type="text" size="35px" name="nombre">
            <br>
            <br>
            <label  style="color: white; font-size: 20px;">Descripción de la Propuesta</label><br><br>
            <textarea name="descripcion" rows="10" cols="30"></textarea><br><br>
            <label style="color: black; font-size: 20px;">Requisitos</label> <br><br>
            <textarea name="requisitos" rows="10" cols="30"></textarea><br><br>
            <label>Fecha Limite</label> 
            <input type="date" name="fecha" size="25px"><br><br>
            
            <input type="submit" value="Publicar Propuesta"><br><br>
        </form>
    </div>
</center>
    



</body>
</html>