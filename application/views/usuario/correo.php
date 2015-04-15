<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Correo</title>
    <!--Link de bootstrap-->
    <?php echo link_tag('css\bootstrap.min.css') ?>
    <!--Link de jquery-->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!--estilos propios-->
    <?php echo link_tag('css\estilos.css') ?>

</head>


<body>


<div>
    <form action="" method="post">
        <div class="col-sm-10">
            <label for="email" style=" color: rgb(91, 250, 13);">Email</label>
            <input class="form-control" type="email" id="email" name="email" placeholder="exemple@alguien.com">
        </div>
        <br>
        <div class="col-sm-10">
            <label for="asunto" style=" color: rgb(91, 250, 13);">Asunto</label>
            <input class="form-control" type="text" id="asunto" name="asunto" placeholder="Asunto">
        </div>
        <br>
        <br>
        <br>
        <textarea class="form-control" name="texto"></textarea>
        <br>
        <br>
        <input type="button" name="enviar" class="btn btn-default" value="Enviar">
    </form>
</div>


</body>
</html>