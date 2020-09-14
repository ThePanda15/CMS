<!--Incluimos el archivo header.php en donde se encuentran todos nuestros cdn -->
<?php include 'header.php'; ?>
<!--Se obtienen los datos del menu, de acuerdo al id solicitado-->
  <?php  $datos = cargar_usuarios($_GET[id]); ?>
  <form class="pure-form pure-form-stacked" action="resultado_usuario.php" method="post" >
    <fieldset>
        <legend>Contenido</legend>

         
        <label for="id">Id</label>
        <!--dentro del atributo valu se imprime el id del usuario-->
        <input type="text" name="id"  value="<?= $datos['idU'] ?>" class="pure-input-1" disabled>

        <label for="nom">Nombre</label>
        <!--dentro del atributo valu se imprime el nombre del usuario-->
        <input type="text" name="nom"  value="<?= $datos['nombre'] ?>" class="pure-input-1">
        
        

        <label for="usr">Usuario</label>
        <!--dentro del atributo valu se imprime el campo usuario del usuario-->
        <input type="text" name="usr" value="<?= $datos['usuario'] ?>" class="pure-input-1">
          

        <label for="passwd">Contraseña</label>
        <!--dentro del atributo valu se imprime la contraseña del usuario-->
        <input type="text" name="passwd"  value="<?= $datos['pass'] ?>" class="pure-input-1">

        <label for="correo">Correo</label>
        <!--dentro del atributo valu se imprime el correo del usuario-->
        <input type="text" name="correo"  value="<?= $datos['correo'] ?>" class="pure-input-1">
        <!--Boton para aguardar los cambios-->
        <button type="submit" id="send" class="pure-button pure-button-primary">Guardar</button>
        <!--Regresar a la pagina de los menus-->
        <a class="btn btn-danger" href="<?= Config::URL.'admin/page-consultar.php' ?>" role="button">Regresar</a>
    </fieldset>
</form>
 <!--Incluimos el archivo footer.php, en donde se encuentra todo nuestro pie de pagina-->
<?php include 'footer.php'; ?>