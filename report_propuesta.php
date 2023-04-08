<?php
include("auth.php");
include("cabecera.php");
include("conexion.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reporte.css">
    <title>Document</title>

    <script>
    function Eliminar() {
    if (confirm("<?php echo "Tambien se Eliminarán las solicitudades con esta propuesta Está seguro de que desea continuar?" ?>")) {
        // Si el usuario hace clic en "Aceptar", realizar la acción
        return true;
    } else {
        // Si el usuario hace clic en "Cancelar", no realizar la acción
        return false;
    }
}
</script>
</head>
<body>
<div class="container-reporte">

<table>
    <tr>
        <th class="t-header t-items">Nombre</th>
        <th class="t-header t-items">Descripcion</th>
        <th class="t-header t-items">Requisito</th>
        <th class="t-header t-items">Fecha_limite</th>
        <th class="t-header t-items">Estado</th>
        <th class="t-header t-items">Items</th>

        
        
    </tr>
    <?php 
    
    $reporte="SELECT * FROM propuesta";
    $resultado= mysqli_query($cn,$reporte);
    while($row=mysqli_fetch_assoc($resultado)){?>
        <tr>

            <td class="t-items"><?php echo $row["nombrepropuesta"]?></td>
            <td class="t-items"><?php echo $row["descripcionpropuesta"]?></td>
            <td class="t-items"><?php echo $row["requisitos"]?></td>
            <td class="t-items"><?php echo $row["fechapropuesta"]?></td>
            <td class="t-items"><?php echo $row["estado"]?></td>
            
            <td class="t-items icons">
                <a href="./editar-reporte-propuesta.php?id=<?php echo $row['idpropuesta']?>"><img src="./img/svg/edit.svg" alt="" ></a>
                <a href="./p-eliminar-report-propuesta.php?id=<?php echo $row['idpropuesta']?>" onclick="return Eliminar()"><img src="./img/svg/trash.svg" alt=""></a>
                <a href="./user_propuestas.php?id=<?php echo $row['idpropuesta']?>"><img src="./img/svg/user.svg" alt=""></a>
                
            </td>
        </tr>
    <?php
        };
    ?> 

</table>
</div>
</body>
</html>