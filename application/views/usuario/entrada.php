<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Correos</title>
    <!--Link de bootstrap-->
    <?php echo link_tag('css\bootstrap.min.css') ?>
    <!--Link de jquery-->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!--estilos propios-->
    <?php echo link_tag('css\estilos.css') ?>

</head>


<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Correo</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Buz&otilde;n Entrada</a></li>
                <li><a href="#">Buz&otilde;n Salida</a></li>
                <li><a href="usuario/login">Salir</a></li>
            </ul>
        </div>
    </div>
</nav>


</body>
</html>