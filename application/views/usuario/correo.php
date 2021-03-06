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

<?= form_open('correoNuevo/insertar');?>

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
            <a class="navbar-brand" href="#">Correo</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
            <ul class="nav navbar-nav">
                <li><a href="#">Buz&oacute;n Entrada</a></li>
                <li><a href="#">Buz&oacute;n Salida</a></li>
                <li><a href="usuario/login">Salir</a></li>
            </ul>
        </div>
    </div>
</nav>

<div>

    <form action="" method="post">
        <div class="form-group">
            <label for="emailFrom" style=" color: rgb(91, 250, 13);">EmailFrom</label>
            <input class="form-control" type="email" id="emailFrom" name="emailFrom" placeholder="exemple@alguien.com">
        </div>

        <div class="form-group">
            <label for="emailTo" style=" color: rgb(91, 250, 13);">Email</label>
            <input class="form-control" type="email" id="emailTo" name="emailTo" placeholder="exemple@alguien.com">
        </div>

        <div class="form-group">
            <label for="asunto" style=" color: rgb(91, 250, 13);">Asunto</label>
            <input class="form-control" type="text" id="asunto" name="asunto" placeholder="Asunto">
        </div>
        <div class="form-group">
            <label for="texto" style=" color: rgb(91, 250, 13);">Texto</label>
            <textarea cols="2" rows="7" class="form-control" name="texto"></textarea>
        </div>

        <input type="submit" name="enviar" class="btn btn-default" value="Enviar">
        <input type="reset" name="cancelar" class="btn btn-default" value="Cancelar">
    </form>
    <?= form_close();?>
    <?= validation_errors();?>

    <div>
        <ul class="nav nav-tabs nav-justified">
            <table class="table">

            </table>
        </ul>
    </div>
</div>

<div>
    <div>
        <ul class="nav nav-tabs nav-justified">
            <table class="table">

            </table>
        </ul>
    </div>
    <script type="application/javascript" src="js/login.js"></script>
</div>

</body>
</html>