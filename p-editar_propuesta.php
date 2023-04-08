<?php
include("./conexion.php");

$id=$_POST["idPorp"];
$titulo=$_POST["nombre"];
$descripcion=$_POST["descripcion"];
$requisitos=$_POST["requisitos"];
$fechaLimite=$_POST["fecha"];


$editar="UPDATE propuesta set nombrepropuesta='$titulo', descripcionpropuesta='$descripcion',requisitos='$requisitos', fechapropuesta='$fechaLimite' WHERE idpropuesta='$id';";
$resultadoeditar=mysqli_query($cn,$editar);
header('location:./principal.php');