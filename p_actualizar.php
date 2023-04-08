<?php 

include("auth.php");
include("conexion.php");

$c=$_SESSION["usuario"];

$nombre=$_POST["nombre"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$email=$_POST["email"];


//actualizar


$sql="update user
set nombreempresa='$nombre',
direccion='$direccion',
telefono='$telefono',
email='$email'
where iduser='$c'";

mysqli_query($cn,$sql);

header('location: principal.php');








 ?>