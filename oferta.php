<?php
include("auth.php");
include("cabecera.php");
include("conexion.php");
$id=$_GET["id"];
$reporte="select * from propuesta p join user u on p.iduser=u.iduser where idpropuesta='$id'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/oferta.css">
    <title>Document</title>
</head>
<body>
    <?php
    $resultado= mysqli_query($cn,$reporte);
    while($row=mysqli_fetch_assoc($resultado)){?>

    <div class="container-oferta">
        <h1><?php echo $row["nombrepropuesta"]?></h1>
        <div class="espacio">
            <strong>Empresa</strong>
            <p><?php echo $row["nombreempresa"]?></p>
        </div>
        <div class="espacio">
            <strong>Descripcion</strong>
            <p><?php echo $row["descripcionpropuesta"]?></p>
        </div>
        <div class="espacio">
            <strong >Requisitos</strong>
            <p><?php echo $row["requisitos"]?></p>
        </div>
        <div class="espacio">
            <strong >Fecha Limite</strong>
            <p><?php echo $row["fechapropuesta"]?></p>
        </div>

        <div>
            <a href="./p-postulante.php?id=<?php echo $row["idpropuesta"]?>">Postular</a>
        </div>
    </div>
    <?php }?>

</body>
</html>