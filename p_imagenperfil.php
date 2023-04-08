<?php 
include("auth.php");
include("conexion.php"); 
$c=$_SESSION['usuario'];

$sql="select * from user;";
$result = $cn->query($sql);


if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
            $username = $row["iduser"];
            $carpeta = "./archivos/$username/perfil";
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




if($_FILES["archivo"]){
	$nombre=$_FILES["archivo"]["name"];
	$archivo=$_FILES["archivo"]["tmp_name"];
    $subir=move_uploaded_file($archivo,"./archivos/$c/perfil/$c.png");
	header('location: principal.php');
}


// list($n,$e)=explode(".", $nombre);


// if ($e=="png") {
	
// 	//reemplazar el archivo

// 	move_uploaded_file($archivo,"img/".$c.".png");
// 	header('location: principal.php');


// } else {
	

// 	//redireccionamos a imagenperfil
// 	header('location: imagenperfil.php');

// }












 ?>