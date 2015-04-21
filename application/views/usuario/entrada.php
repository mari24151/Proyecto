<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bandeja Entrada</title>
    <?php echo link_tag('css\bootstrap.min.css') ?>
    <!--Link de jquery-->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!--estilos propios-->
    <?php echo link_tag('css\demo.css') ?>
    <?php echo link_tag('css\style.css') ?>
    <?php echo link_tag('css\animate-custom.css') ?>
</head>

<body>
<div class="container">

    <header>
        <h1>Bienvenido a  <span>  RootMail</span></h1>
        <nav class="codrops-demos">

        </nav>
    </header>

    <section>
        <div id="container_demo" >
            <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">

                    <div class="navbar navbar-inverse">
                        <a class="navbar-brand" href="#"></a>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">RootMail</a></li>
                            <li><a href="usuario/entrada">Bandeja Entrada</a></li>
                            <li><a href="usuario/salida">Bandeja Salida</a></li>
                            <li><a href="">Salir</a></li>
                        </ul>
                    </div>s

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
                                    <?php foreach ($correos as $cr): ?>
                                    <tr>
                                        <td><?php echo"{$cr->id}"?></td>
                                        <td><?php echo"{$cr->emailFrom}"?></td>
                                        <td><?php echo"{$cr->emailTo}"?></td>
                                        <td><?php echo"{$cr->asunto}"?></td>
                                        <td><?php echo"{$cr->texto}"?></td>
                                    </tr>
                                </table>
                            </ul>
                        </div>

                        <a onclick= href="entrada/editar/<?=$cr->id?>">Editar</a>
                        <a onclick= href="entrada/eliminarCorreo/<?=$cr->id?>">Eliminar</a>
                        <a onclick= href="entrada/verUno<?=$cr->id?>">ver</a>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>