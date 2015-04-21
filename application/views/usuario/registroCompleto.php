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
        <?= form_open('usuario/index');?>
        <div id="container_demo" >
            <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">
                    <h1>Registro completo</h1>
                    <p>Revisa tu correo  para activar tu cuenta</p>

                    <p class="change_link">
                        Dirigete a Iniciar Sesión ?
                        <a href="usuario/index" class="change_link">Iniciar Sesión</a>
                    </p>

                </div>
            </div>
        </div>
        <?= form_close();?>
        <?= validation_errors();?>
    </section>
</div>
</body>
</html>