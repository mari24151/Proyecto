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
            <input class="form-control" type="email" id="email" name="email">
        </div>
        <br>
        <div>
            <input class="form-control" type="text" id="asunto" name="asunto">
        </div>
        <br>
        <textarea class="form-control" name="texto"></textarea>
    </form>

</div>


</body>
</html>