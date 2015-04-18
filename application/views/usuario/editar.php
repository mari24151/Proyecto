<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registro</title>
    <!--Link de bootstrap-->
    <?php echo link_tag('css\bootstrap.min.css') ?>
    <!--Link de jquery-->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!--estilos propios-->
    <?php echo link_tag('css\estilos.css') ?>

</head>


<body>
<!--editar-->
<div id="j">
    <div style="margin-left: 542px; margin-top: 213px; margin-right: 644px;">

        <div class="form-group">
            <label for="id" style=" color: cornsilk;">Nombre</label><br>
            <input type="text" class="form-control" id="id" name="id">
        </div>
        <div class="form-group">
            <label for="emailTo" style=" color: cornsilk;">Correo</label><br>
            <input type="text" class="form-control" id="emailTo" name="emailTo">
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
        <input type="reset" class="btn btn-default" id="k" value="Cancelar">
    </div>

</div>
<?= form_close();?>



</body>
</html>