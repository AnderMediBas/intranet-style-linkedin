<?php 
session_start();

if ($_SESSION["auth"]!="1") {

$mensaje="Sr. por favor logueese bien :P";	
header('location: index.php?m='.$mensaje);
exit();

}


 ?>