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
</head>
<body>
    
    <div class="container-reporte">

        <table>
            <tr>
                <th class="t-header t-items">Postulante</th>
                <th class="t-header t-items">Cargo</th>
                <th class="t-header t-items">descripcion</th>
                <th class="t-header t-items">Archivo</th>
                <th class="t-header t-items">Download</th>
                
                
            </tr>
            <?php 
            
            $reporte='SELECT * FROM solicitudes s join propuesta p on s.idpropuesta=p.idpropuesta join   user u on s.iduser=u.iduser join curriculum c on c.iduser=u.iduser;';
            $resultado= mysqli_query($cn,$reporte);
            while($row=mysqli_fetch_assoc($resultado)){?>
                <tr>

                    <td class="t-items"><?php echo $row["nombreempresa"]?></td>
                    <td class="t-items"><?php echo $row["nombrepropuesta"]?></td>
                    <td class="t-items"><?php echo $row["descripcionpropuesta"]?></td>
                    <td class="t-items"><?php echo $row["archivo"]?></td>
                    

                    
                    <td class="t-items">
                        <center>
                            <a href="./archivos/<?php echo $row['iduser']?>/cv/<?php echo $row['archivo']?>" download="<?php $row["archivo"]?>"><img src="./img/svg/download.svg" alt=""></a>
                            
                        </center>
                    </td>
                </tr>
            <?php
                };
            ?> 
        
        </table>
    </div>
</body>
</html>