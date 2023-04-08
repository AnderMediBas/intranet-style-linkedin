<?php
include("auth.php");
include("./conexion.php");
include("cabecera.php");
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reporte.css">
    <title>Document</title>
</head>
<body>
<div class="container-reporte">

<table>
    <tr>
        <th class="t-header t-items">Postulante</th>
        <th class="t-header t-items">cargo</th>
        <th class="t-header t-items">Perfil</th>

    </tr>
    <?php 
    
    $reporte="SELECT * FROM solicitudes s join user u on s.iduser=u.iduser join curriculum c on c.iduser=u.iduser where idpropuesta='$id';";
    $resultado= mysqli_query($cn,$reporte);
    while($row=mysqli_fetch_assoc($resultado)){?>
        <tr>

            <td class="t-items"><?php echo $row["nombreempresa"]?></td>
            <td class="t-items"><?php echo $row["cargo"]?></td>
            <td class="t-items"><?php echo $row["perfil"]?></td>
            
        </tr>
    <?php
        };
    ?> 

</table>
</div>
</body>
</html>