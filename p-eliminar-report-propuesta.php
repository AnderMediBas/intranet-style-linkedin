<?php
include("./conexion.php");
$id=$_GET['id'];


    $eliminarsolicitud="delete from solicitudes where idpropuesta='$id'";
    $elim_soli=mysqli_query($cn,$eliminarsolicitud);

    $eliminar="delete from propuesta where idpropuesta='$id'";
    $result=mysqli_query($cn,$eliminar);

    
    header("location: report_propuesta.php");

