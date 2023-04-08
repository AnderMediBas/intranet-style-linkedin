<?php 
include("auth.php");
include("conexion.php");

$c=$_SESSION["usuario"];


$pass=$_POST["txtpass"];
$repass=$_POST["txtrepass"];




if (strcmp($pass,$repass)==0) {
	
		if (strlen($pass)) {
			


			$sql="update user
			set password='$pass'
			where iduser=$c";

			mysqli_query($cn,$sql);

			header('location: cerrarsesion.php');



		} else {
			
			header('location: cambiarpass.php');
		}
		




} else {
	

header('location: cambiarpass.php');

}













 ?>