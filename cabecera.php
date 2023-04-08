<?php

include("conexion.php");

$c=$_SESSION["usuario"];



$sql="select * from user e
	where 
	iduser='$c'";

$f=mysqli_query($cn,$sql);

$r=mysqli_fetch_array($f);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" href="css/estilo.css" type="text/css">

	<link rel="stylesheet" href="menu_assets/estilo.css" type="text/css">
	<link rel="stylesheet" href="menu_assets/styles.css" type="text/css">


</head>
<body>

<center>
	
	<img src="linkedin.png" width="180" height="180">
	<br>
	<h1>LinkedIn</h1>

</center>

<BR>


<center>


<div id='cssmenu'>
<ul>
            <li><a href='principal.php'><span>Principal</span></a></li>
            <li class='has-sub'><a href='#'><span>Actualizaci&oacute;n</span></a>
               <ul>
                  <li><a href='actualizar.php'><span>Datos Personales</span></a></li>
                  <li><a href='imagenperfil.php'><span>Cambiar Foto de Perfil</span></a></li>
                  <li class='last'><a href='cambiarpass.php'><span>Cambiar Contrase&ntilde;a</span></a></li>
               </ul>
            </li>
            <?php
            if($r["categoria"]=="Empresa"){?>
               <li><a href="propuestalaboral.php"><span>G Propuesta</span></a>
               </li>
               <li><a href="./report_propuesta.php"><span>R.Propuestas</span></a>
               </li>
               <li><a href='./reporte_postulante.php'><span>Postulantes</span></a></li>
            <?php }
            else {?>
               <li><a href='curriculum.php'><span>Curriculum</span></a></li>
               <li><a href='ofertalaboral.php'><span>Ofertas Laborales</span></a></li>
            <?php }?>
            
         <li class='last'><a href='cerrarsesion.php'><span>Cerrar Sesi&oacute;n</span></a></li>
         </ul>
         </div>


</center>






</body>
</html>