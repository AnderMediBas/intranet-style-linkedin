<?php 
//trabajando con sesión
session_start();



include("conexion.php");

$usu=$_POST["txtusuario"];
$pass=$_POST["txtpass"];

$sql="select * from user where username='$usu' and password='$pass'";
$fila=mysqli_query($cn,$sql);
$r=mysqli_fetch_array($fila);

$valor=$r["iduser"];



if ($valor==null) {
	
	header('location:index.php');


} else {

	$_SESSION["usuario"]=$valor;

	$_SESSION["auth"]=1;

	header('location: principal.php');
}








 ?>