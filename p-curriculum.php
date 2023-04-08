<?php
include("auth.php");
include('./conexion.php');
$cargo=$_POST['cargo'];
$perfil=$_POST['perfil'];
$c=$_SESSION["usuario"];




$sql="select * from user;";
$result = $cn->query($sql);


if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
        if($row["categoria"]=="Postulante"){
            
            $username = $row["iduser"];
            $carpeta = "./archivos/$username/cv";
            if (!file_exists($carpeta)) {
                mkdir($carpeta, 0777, true);
                echo 'Carpeta para el usuario ' . $username . ' creada correctamente<br>';
            } else {
                echo 'La carpeta para el usuario ' . $username . ' ya existe<br>';
            }

        }else{
            echo "esta cuenta de Empresa";
        }
	}
}else {
	echo "No se encontraron usuarios";
}


$directorio="archivos/$c/cv/";

if($_FILES["file"]){
    $archivo=basename($_FILES["file"]["name"]);
    $ruta=$directorio.$archivo;
    $subir=move_uploaded_file($_FILES["file"]["tmp_name"],$ruta);
    if($subir){
        $insertar="insert into curriculum (cargo,perfil,archivo,iduser) values ('$cargo','$perfil','$archivo',$c);";
        $resultado=mysqli_query($cn,$insertar);
        if($resultado){
            echo "<script>alert('Se ha enviado tu Curriculum');window.location='./curriculum.php'</script>";
        }
    }
}
?>