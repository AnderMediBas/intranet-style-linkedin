<?php 
include("conexion.php");


if(isset($_POST['nombre']) && isset($_POST['tipo']) && isset($_POST['direccion']) && isset($_POST['telefono']) && isset($_POST['email']) && isset($_POST['usuario']) && isset($_POST['contraseña'])){
	$nombre=$_POST['nombre'];
	$categoria=$_POST['tipo'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$email=$_POST['email'];
	$usuario=$_POST['usuario'];
	$contraseña=$_POST['contraseña'];

	$registro="insert into user (nombreempresa,categoria,direccion,telefono,email,username,password) values ('$nombre','$categoria','$direccion','$telefono','$email','$usuario','$contraseña');";
	$enviar=mysqli_query($cn,$registro);


	$sql="select * from user;";
	$result = $cn->query($sql);
	
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()) {
			$username = $row["iduser"];
        	$carpeta = "./archivos/" . $username;

			if (!file_exists($carpeta)) {
				mkdir($carpeta, 0777, true);
				echo 'Carpeta para el usuario ' . $username . ' creada correctamente<br>';
			} else {
				echo 'La carpeta para el usuario ' . $username . ' ya existe<br>';
			}
		}
	}else {
		echo "No se encontraron usuarios";
	}

	header('location:principal.php');


}