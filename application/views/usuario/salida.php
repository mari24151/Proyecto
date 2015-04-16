<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bandeja de entrada</title>
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
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-9">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Correos</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
            <ul class="nav navbar-nav">
                <li><a href="#">Buz&oacute;n Entrada</a></li>
                <li class="active"><a href="#">Buz&oacute;n Salida</a></li>
                <li><a href="">Salir</a></li>
            </ul>
        </div>
    </div>
</nav>

<div>
    <div id="container">

        <ul class="nav nav-tabs nav-justified">
            <table class="table">



            </table>
        </ul>
    </div>

</div>


</body>
</html>