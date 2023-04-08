<?php
include("./conexion.php");
$id=$_GET['id'];


    $eliminarsolicitud="delete from curriculum where idcurriculum='$id'";
    $elim_soli=mysqli_query($cn,$eliminarsolicitud);

    
    header("location: ./curriculum.php");
