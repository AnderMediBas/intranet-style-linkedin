<?php
include("auth.php");
include('./conexion.php');
$idProp=$_GET['id'];

$c=$_SESSION["usuario"];


$registro="insert into solicitudes (idpropuesta,iduser) values ('$idProp','$c');";
$enviar=mysqli_query($cn,$registro);
header('location:ofertalaboral.php');


?>