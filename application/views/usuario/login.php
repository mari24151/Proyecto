<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <!--Link de bootstrap-->
    <?php echo link_tag('css\bootstrap.min.css') ?>
    <!--Link de jquery-->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!--estilos propios-->
    <?php echo link_tag('css\estilos.css') ?>

</head>


<body>

<?= form_open('usuario/verificar');?>
<!--login-->
<div id="j">
    <div style="margin-left: 542px; margin-top: 213px; margin-right: 644px;">

            <div class="form-group">
                <label for="email" style=" color: cornsilk;"><span class="glyphicon glyphicon-envelope"></span> Correo</label><br>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="contrasena" style=" color: cornsilk;"><span class="glyphicon glyphicon-barcode"></span>  Contrase&ntilde;a</label><br>
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Password">
            </div>
            <br>
            <input type="submit" class="btn btn-default" value="Aceptar">

        <a href="usuario/registro" class="btn btn-default">Registrarse</a>
    </div>

    <script type="application/javascript" src="js/login.js"></script>
</div>
<?= form_close();?>
<?= validation_errors();?>
</body>
</html>