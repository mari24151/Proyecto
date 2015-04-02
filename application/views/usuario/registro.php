<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registro</title>
    <!--Link de bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Link de jquery-->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!--estilos propios-->
    <link rel="stylesheet" type="text/css" href="css\estilos.css">

</head>


<body>

<!--Registro-->
<div id="j">
    <div style="margin-left: 542px; margin-top: 213px; margin-right: 644px;">
        <form method="POST" action="usuario/insertar">
            <div class="form-group">
                <label for="nombre" style=" color: cornsilk;">Nombre</label><br>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="correo" style=" color: cornsilk;">Correo</label><br>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="contrasena" style=" color: cornsilk;">Contrase&ntilde;a</label><br>
                <input type="password" class="form-control" id="contrasena" name="contrasena">
            </div>
            <br>
            <input type="submit" class="btn btn-default" value="Agregar">
        </form>
        <a href="index.html"><input type="submit" class="btn btn-default" id="k" value="Cancelar"></a>
    </div>
</div>

</body>
</html>