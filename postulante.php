<?php
    include("auth.php");
    include("cabecera.php");
    include("conexion.php");
    $c=$_SESSION["usuario"];


    $id=$_GET["id"];
    $reporte="select * from propuesta where idpropuesta='$id'";    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/registroPostulante.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="./p-postulante.php" enctype="multipart/form-data">
            
            <input  type="hidden" name="id-propuesta" id="txtid" value="<?php echo $id?>">
            <input  type="hidden" name="id-user" id="txtuser" value="<?php echo $c?>">
            <div class="archivo">
                <label for="archCurriculum">Subir curriculum</label>
                <input type="file" id="archCurriculum" name="file">
            </div>
        
        <button>guardar</button>
        
        </form>

    </div>
</body>
</html>