<?php 
include("conexion.php");


if(isset($_POST['nombre']) && isset($_POST['tipo']) && isset($_POST['direccion']) && isset($_POST['telefono']) && isset($_POST['email']) && isset($_POST['usuario']) && isset($_POST['contraseña'])){
	$nombre=$_POST['e-nombre'];
	$categoria=$_POST['e-tipo'];
	$direccion=$_POST['e-direccion'];
	$telefono=$_POST['e-telefono'];
	$email=$_POST['e-email'];
	$usuario=$_POST['e-usuario'];
	$contraseña=$_POST['e-contraseña'];

	$registro="insert into user (nombreempresa,categoria,direccion,telefono,email,username,password) values ('$nombre','$categoria','$direccion','$telefono','$email','$usuario','$contraseña');";
	$enviar=mysqli_query($cn,$registro);
	header('location:principal.php');
}
// if(isset($_POST["registroE"])){
// 	if(isset($_POST["nombre"])){
// 		$nombre=$_POST["nombre"];
// 		if(isset($_POST["categoria"])){
// 		$categoria=$_POST["categoria"];
// 		}
// 		if(isset($_POST["direccion"])){
// 		$direccion=$_POST["direccion"];
// 		}
// 		if(isset($_POST["telefono"])){
// 		$telefono=$_POST["telefono"];
// 		}
// 		if(isset($_POST["email"])){
// 		$email=$_POST["email"];
// 		}
// 		if(isset($_POST["usuario"])){
// 		$usuario=$_POST["usuario"];
// 		}
// 		if(isset($_POST["contraseña"])){
// 		$contraseña=$_POST["contraseña"];
// 		}

// 		$campos = array();

// 		if($nombre==""){
// 		array_push($campos, "El campo nombre no puede estar vacio");
// 		}
// 		if($categoria==""){
// 		array_push($campos, "El campo categoria no puede estar vacio");
// 		}
// 		if($direccion==""){
// 		array_push($campos, "El campo direccion no puede estar vacio");
// 		}
// 		if($telefono==""){
// 		array_push($campos, "El campo telefono no puede estar vacio");
// 		}
// 		if($email==""){
// 		array_push($campos, "El campo email no puede estar vacio");
// 		}
// 		if($usuario==""){
// 		array_push($campos, "El campo usuario no puede estar vacio");
// 		}
// 		if($contraseña==""){
// 		array_push($campos, "El campo contraseña no puede estar vacio");
// 		}	
// 		if(count($campos)>0){
// 		echo "<dir class='error'>";
// 		for ($i=0; $i < count($campos); $i++) { 
// 			echo "<li>".$campos[$i]."</i>";
// 		}
// 		}else{
// 			$sql="insert into empresa(nombreempresa,categoria,direccion,telefono,email)
// 			values ('$nombre','$categoria','$direccion','$telefono','$email')";

// 			$f=mysql_query($sql);
// 			$idempresa=mysql_insert_id();
// 			if($f==1){
// 				$sql="insert into cuenta(usuarios,password,idempresa)
// 					values ('$usuario','$contraseña',$idempresa)";
// 				$s=mysql_query($sql);
// 				if($s==1){
// 					header('location: index.php');
// 				}
// 			}else{
// 				$mensaje  = 'Consulta no válida: ' . mysql_error() . "\n";
// 				die($mensaje);
// 			}
			
// 		}
// 	}
// }
?>