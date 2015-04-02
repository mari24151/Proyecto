<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <!--Link de bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Link de jquery-->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <title>Registro</title>
    <!--estilos propios-->
    <link rel="stylesheet" type="text/css" href="css\estilos.css">

</head>


<body>

<!--login-->
<div id="j">
    <div style="margin-left: 542px; margin-top: 213px; margin-right: 644px;">
        <form method="POST" id="form-login" action="">
            <?php if(! is_null($mensaje)) echo $mensaje;?>
            <div class="form-group">
                <label for="correo" style=" color: cornsilk;"><span class="glyphicon glyphicon-envelope"></span> Correo</label><br>
                <input type="email" class="form-control" id="correo" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="pass" style=" color: cornsilk;"><span class="glyphicon glyphicon-barcode"></span>  Contrase&ntilde;a</label><br>
                <input type="password" class="form-control" id="pass" name="contrasena" placeholder="Password">
            </div>
            <br>
            <input type="submit" class="btn btn-default" value="Iniciar">
        </form>
        <a href="registro.html"><input type="submit" class="btn btn-default"  id="l" value="Registrarse"></a>
    </div>

    <script type="application/javascript" src="js/login.js"></script>
</div>

</body>
</html>