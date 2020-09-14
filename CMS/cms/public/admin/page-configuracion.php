<!--Incluimos el archivo header.php en donde se encuentran todos nuestros cdn -->
<?php include 'header.php'; ?>
 <!--Se obtienen los datos de la tabla configuracion de acuerdo a su id-->
  <?php $res = cargar_datos_configuracion(); ?>
   <form class="pure-form pure-form-stacked" action="resultado_configuracion.php" method="post">
      <fieldset>
          <legend>Configuración</legend>

          <label for="title">Titulo web</label>
          <!--dentro del atributo valu se imprime el titulo de la configuracion-->
          <input name="title" type="text" placeholder="Titulo" value="<?= $res['titulo'] ?>" class="pure-input-1">

          <label for="address">Dirección</label>
          <!--dentro del atributo valu se imprime la direccion de la configuracion-->
          <input name="address" type="text" placeholder="Dirección" value="<?= $res['direccion'] ?>" class="pure-input-1">


          <label for="geolocation">Geolocalización</label>
          <!--dentro del atributo valu se imprime la geolocalizacion de la configuracion-->
          <input name="geolocation" type="text" placeholder="latitud,longitud" value="<?= $res['geolocalizacion'] ?>" class="pure-input-1">
            <!--Boton para aguardar los cambios-->
          <button type="submit" class="pure-button pure-button-primary">Guardar</button>
      </fieldset>
  </form>
  <!--Incluimos el archivo footer.php, en donde se encuentra todo nuestro pie de pagina-->
<?php include 'footer.php'; ?>