<?php
   include("auth.php");
   include("cabecera.php");
   include("conexion.php"); 

   $c=$_SESSION["usuario"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/curriculum.css">
    <link rel="stylesheet" href="./css/reporte.css">
    <title>Document</title>
</head>
<body>
    <div class="container-curriculum">
        <form action="./p-curriculum.php" method="POST" enctype="multipart/form-data">
        <div class="cargo">
            <label for="">CARGO</label>
            <input type="text" name="cargo" placeholder="Ingrese su Cargo">
        </div>
        <div class="cargo">
            <label for="">PERFIL</label>
            <input type="text" name="perfil" placeholder="Ingrese su Perfil">
        </div>
        <div class="cargo">
            <input type="file" id="archCurriculum" name="file">
        </div>

        <center>
            <button>subir</button>
        </center>
        </form>
        
        <!-- ver los cv ya registrado -->
<table border="1">
    <tr>
        <th class="t-header t-items">Cargo</th>
        <th class="t-header t-items">Perfil</th>
        <th class="t-header t-items">Archivo</th>
        <th class="t-header t-items">Items</th>
    </tr>
    <?php 
    
    $reporte="SELECT * FROM curriculum where iduser='$c'";
    $resultado= mysqli_query($cn,$reporte);
    while($row=$resultado->fetch_assoc()){?>
    <center>
    <div>
    <tr>
            <td class="t-items"><?php echo $row["cargo"]?></td>
            <td class="t-items"><?php echo $row["perfil"]?></td>
            <td class="t-items"><?php echo $row["archivo"]?></td>
                
            <td class="t-items icons">
                <a href="./p-eliminar-cv.php?id=<?php echo $row['idcurriculum']?>" onclick="return Eliminar()"><img src="./img/svg/trash.svg" alt=""></a>
            </td>
        </tr>
    </div>
        

    </center>
    <?php
        };
    ?> 
</table>
</div>
</body>
</html>