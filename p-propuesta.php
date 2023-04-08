<?php 
include("auth.php");
include('./conexion.php');
$c=$_SESSION["usuario"];



if(isset($_POST["nombre"]) && isset($_POST["descripcion"])&& isset($_POST["requisitos"]) && isset($_POST["fecha"]) ){
		
	$nombre=$_POST["nombre"];
	$descripcion=$_POST["descripcion"];
	$requisitos=$_POST["requisitos"];
	$fecha=$_POST["fecha"];

	$sql="insert into propuesta (nombrepropuesta,descripcionpropuesta,requisitos,fechapropuesta,estado,iduser)
	values ('$nombre','$descripcion','$requisitos','$fecha','A','$c')";
	$enviar=mysqli_query($cn,$sql);
    header('location: propuestalaboral.php');
	}else{
		echo "<script>alert('Error al Registrar')</script>";
		header('location: propuestalaboral.php');
	}
?>