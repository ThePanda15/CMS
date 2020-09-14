<!--Incluimos el archivo header.php en donde se encuentran todos nuestros cdn -->
<?php include 'header.php'; ?>
 <!--Se obtienen los datos del menu, de acuerdo al id solicitado-->
  <?php  $datos = cargar_menu($_GET[id]); ?>


  <form class="pure-form pure-form-stacked" action="resultado_menu.php" method="post" >
    <fieldset>
        <legend>Contenido</legend>

         
        <label for="id">Id</label>
         <!--dentro del atributo valu se imprime el idmenu-->
        <input type="text" name="id"  value="<?= $datos['idmenu'] ?>" class="pure-input-1" disabled>

        <label for="nom">Nombre</label>
        <!--dentro del atributo valu se imprime el nombre-->
        <input type="text" name="nom"  value="<?= $datos['nombre'] ?>" class="pure-input-1">

        <label for="urlm">url</label>
        <!--dentro del atributo valu se imprime el url-->
        <input type="text" name="urlm" value="<?= $datos['url'] ?>" class="pure-input-1">
          

        <label for="ord">Orden</label>
        <!--dentro del atributo valu se imprime el numero de orden-->
        <input type="text" name="ord"  value="<?= $datos['orden'] ?>" class="pure-input-1">

        <!--Boton para aguardar los cambios-->
        <button type="submit" id="send" class="pure-button pure-button-primary">Guardar</button>
        <!--Regresar a la pagina de los menus-->
        <a class="btn btn-danger" href="<?= Config::URL.'admin/page-consultar.php' ?>" role="button">Regresar</a>
    </fieldset>
</form>
 <!--Incluimos el archivo footer.php, en donde se encuentra todo nuestro pie de pagina-->
<?php include 'footer.php'; ?>