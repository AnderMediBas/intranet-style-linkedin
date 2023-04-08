<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
   
<body>
    <br>
    <h1>¡Registrate!</h1>
    <form method="POST" action="p_registro.php">
        <div class="col-2" style="text-align: center;">
            <div class="input-group">
                <div class="p-t-10">
                    <label class="radio-container m-r-45">Empresa
                        <input type="radio" name="tipo" value="Empresa" ">
                        <span class="checkmark"></span>
                    </label>
                    <label class="radio-container">Postulante
                        <input type="radio" name="tipo" value="Postulante" >
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="categorias" id="empresa" >
        <!-- <form method="" action="p_registro.php" id="empresa" style="display: none;"> -->
            <input type="text" name="nombre" placeholder="Nombre completo">
            <input type="text" name="direccion" placeholder="Direccion">
            <input type="text" name="telefono" placeholder="Telefono">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="password" name="contraseña" class="pwd" placeholder="Contraseña">
            <input type="submit" name="registrar">
        </div>
        <!-- <div class="categorias" id="postulante" style="display: none;">
            <input type="text" name="nombre" placeholder="Nombre completo">
            <input type="text" name="direccion" placeholder="Direccion">
            <input type="text" name="telefono" placeholder="Telefono">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="password" name="contraseña" class="pwd" placeholder="Contraseña">
            <input type="submit" name="registrar">
        </div> -->
    </form>

    
    
    
    
        
    </form>
</body>
</html>