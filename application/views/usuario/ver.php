<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ver</title>
    <!--Link de bootstrap-->
    <?php //echo link_tag('css\bootstrap.min.css') ?>
    <!--Link de jquery-->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!--estilos propios-->
    <?php //echo link_tag('css\estilos.css') ?>
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
                <li class="active"><a href="#">Buz&oacute;n Entrada</a></li>
                <li><a href="#">Buz&oacute;n Salida</a></li>
                <li><a href="">Salir</a></li>
            </ul>
        </div>
    </div>
</nav>

<div>
    <div id="container">
        <ul class="nav nav-tabs nav-justified">
            <table class="table table-striped">

                <tr>
                    <td><strong>id</strong></td>
                    <td><strong>emailFrom</strong></td>
                    <td><strong>emailTo</strong></td>
                    <td><strong>asunto</strong></td>
                    <td><strong>texto</strong></td>
                </tr>
                <?php foreach ($verl as $vr): ?>
                <tr>
                    <td><?php echo"{$vr->id}"?></td>
                    <td><?php echo"{$vr->emailFrom}"?></td>
                    <td><?php echo"{$vr->emailTo}"?></td>
                    <td><?php echo"{$vr->asunto}"?></td>
                    <td><?php echo"{$vr->texto}"?></td>
                </tr>
            </table>
        </ul>
    </div>
    <input type="reset" class="btn btn-default" id="k" value="Cancelar">
    <?php endforeach;?>
</div>

</body>
</html>