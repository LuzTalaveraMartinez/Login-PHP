<?php 
require_once 'includes/redireccion.php'; 
require_once 'includes/cabecera.php'; 
include('includes/helpers.php');
?>



<!--  CAJA PRINCIPAL  -->


<div id="mostrar-datos">

    <h1 class="Mis_datos">Mis datos</h1><br>

    <!-- MOSTRAR ERRORES -->


    <form class="formulario04" action="actualizar-datos.php" method="POST">

        <label class="label" for="nombre">Nombre</label>
        <input class="input" type="text" name="nombre" value="<?= $_SESSION['usuario']['nombre']; ?>" /><br>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION["errores"], 'nombre') : ' '; ?>


        <label class="label" for="apellidos">Apellidos</label>
        <input class="input" type="text" name="apellidos" value="<?= $_SESSION['usuario']['apellidos']; ?>" /><br>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION["errores"], 'apellidos') : ' '; ?>


        <label class="label" for="email">Email</label>
        <input class="input" type="email" name="email" value="<?= $_SESSION['usuario']['email']; ?>" /><br>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION["errores"], 'email') : ' '; ?>


        <input class="boton_mostrar-datos" type="submit" value="Editar" name="submit" />


    </form>
    <?php borrarErrores(); ?>

</div>

<!--  FIN CAJA PRINCIPAL  -->

<?php require_once 'includes/pie.php'; ?>