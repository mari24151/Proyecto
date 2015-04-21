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
        <?= form_open('usuario/insertar');?>

        <div id="container_demo" >
            <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">

                <div id="login" class="animate form">

                    <!--login-->
                    <h1>Registrarse </h1>

                    <p>
                        <label for="nombre" class="uname" data-icon="u">Nombre Usuario</label>
                        <input id="nombre" name="nombre" required="required" type="text" placeholder="mysuperusername690" />
                    </p>
                    <p>
                        <label for="email" class="youmail" data-icon="e" > Email </label>
                        <input id="email" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/>
                    </p>
                    <p>
                        <label for="contrasena" class="youpasswd" data-icon="p">Contraseña </label>
                        <input id="contrasena" name="contrasena" required="required" type="password" placeholder="eg. X8df!90EO"/>
                    </p>

                    <p class="signin button">
                        <a href="usuario/registroCompleto" class="signin button"></a>
                        <input type="submit" value="Registrarse"/>
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