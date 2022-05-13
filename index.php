<?php include('./includes/cabecera.php');
include('./includes/helpers.php');
?>


<aside id="sidebar">

    <!-- COMIENZO DE CONTENEDOR PRINCIPAL -->

    <!-- Comprobamos si existe el usuario -->

    <?php if (isset($_SESSION['usuario'])) : ?>

        <div id="usuario-logueado" class="bloque">

            <h3 class="saludo">
                Hola, <?= $_SESSION['usuario']['nombre']. ' ' . $_SESSION['usuario']['apellidos']; ?>
            </h3>

        </div>

    <?php endif; ?>



    <!--HACEMOS UNA CONDICIONAL GENERAL-->


    <?php if (!isset($_SESSION['usuario'])) : ?>

        <!-- COMPROBAMOS QUE EXISTA UNA SESION Y si es asi no se muestra la sessión de REGISTRARSE-->

        <div id="login" class="bloque">


            <?php if (isset($_SESSION['error_login'])) : ?>

                <div class="alerta alerta-error">
                    <?= $_SESSION['error_login']; ?>
                </div>

            <?php endif; ?>

            <form class="formulario05" action="login.php" method="POST">

                <h3 class="titulo_ingresar">Ingresar</h3>
            
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Ingrese su email"><br>

                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Ingrese su contraseña"><br>

                <input class="boton" type="submit" value="Entrar" />

            </form>

        </div>


        <div id="register" class="bloque">

            <!-- MOSTRAR ERRORES -->


            <?php if (isset($_SESSION['completado'])) : ?>
                <div class="alerta alerta-exito">
                    <?= $_SESSION['completado']; ?>
                </div>
            <?php elseif (isset($_SESSION['errores']['general'])) :  ?>
                <div class=" alerta alerta-error">
                    <?= $_SESSION['errores']['general'] ?>
                </div>
            <?php endif; ?>


            <form class="formulario02" action="registro.php" method="POST">

                <h3 class="titulo_ingresar">Registrarme</h3>

                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre"><br>
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION["errores"], 'nombre') : ' '; ?>

                <label for="apellidos">Apellidos</label>
                <input type="text" id="apellidos" name="apellidos" placeholder="Ingrese su apellidos"><br>
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION["errores"], 'apellidos') : ' '; ?>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Ingrese su email"><br>
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION["errores"], 'email') : ' '; ?>

                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Ingrese su contraseña"><br>
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION["errores"], 'password') : ' '; ?>

                <input class="boton" type="submit" value="Registrar" name="submit" />

            </form>

            <?php borrarErrores(); ?>

        </div>



    <?php

    endif;

    ?>
    <!--FIN DE LA CONDICIONAL GENERAL-->




    <!--HACEMOS UNA CONDICIONAL GENERAL-->

</aside>

<!-- FINAL DEL CONTENEDOR PRINCIPAL-->


<?php include('includes/pie.php'); ?>