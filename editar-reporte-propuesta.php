<?php
    include("auth.php");
    include("cabecera.php");
    include("conexion.php");
    $id=$_GET["id"];
    $reporte="select * from propuesta where idpropuesta='$id'";    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php $resultado= mysqli_query($cn,$reporte);
                while($row=mysqli_fetch_assoc($resultado)){
?>
<center>
    <div class="container-propuestalaboral">
        <form action="./p-editar_propuesta.php" method="POST"><br>
            <input type="hidden" name="idPorp" value="<?php echo $row["idpropuesta"]?>">
            <label  style="color: white; font-size: 20px;">Nombre de Propuesta</label><br><br>
            <input class="txtText" type="text" size="35px" name="nombre" value="<?php echo $row["nombrepropuesta"]?>">
            <br>
            <br>
            <label  style="color: white; font-size: 20px;">Descripción de la Propuesta</label><br><br>
            <textarea name="descripcion" rows="10" cols="30"><?php echo $row["descripcionpropuesta"]?></textarea><br><br>
            <label style="color: black; font-size: 20px;">Requisitos</label> <br><br>
            <textarea name="requisitos" rows="10" cols="30"><?php echo $row["requisitos"]?></textarea><br><br>
            <label>Fecha Limite</label> 
            <input type="date" name="fecha" size="25px" value="<?php echo $row["fechapropuesta"]?>"><br><br>
            
            <Button>Editar</Button><br><br>
        </form>
    </div>
</center>
<?php
};
?>

</body>
</html>