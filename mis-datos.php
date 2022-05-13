<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'index.php'; ?>


<!--  CAJA PRINCIPAL  -->


<div id="sidebar">


    <h2 class="mis-datos01">Mis datos</h2><br>


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

    <form class="formulario03" action="actualizar-datos.php" method="POST">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?= $_SESSION['usuario']['nombre']; ?>" /><br>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION["errores"], 'nombre') : ' '; ?>


        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" value="<?= $_SESSION['usuario']['apellidos']; ?>" /><br>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION["errores"], 'apellidos') : ' '; ?>


        <label for="email">Email</label>
        <input type="email" name="email" value="<?= $_SESSION['usuario']['email']; ?>" /><br>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION["errores"], 'email') : ' '; ?>


        <input class="boton" type="submit" value="Actualizar" name="submit" />
        <button class="boton-cerrar" type="button" name="Cerrar"><a href="cerrar-sesion.php">Cerrar</a></button>

    </form>
    <?php borrarErrores(); ?>



</div>


<!--  FIN CAJA PRINCIPAL  -->

<?php require_once 'includes/pie.php'; ?>