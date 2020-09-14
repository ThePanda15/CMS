<!--Incluimos el archivo header.php en donde se encuentran todos nuestros cdn -->
<?php include 'header.php'; ?>
<!--Retorna el tipo de contenido que estamos subiendo, si es una página web, o es un post. Esta función debe ser agregada a lib/data.php-->
  <?php  $datos = cargar_contenido($_GET[id]); ?>
<!-- Se obtienen los datos de los menus, desde la funcion cargar_datos_menu del archivvo lib/data.php-->
  <?php $res = cargar_datos_menu(); ?>
  <form class="pure-form pure-form-stacked" action="resultado_contenido.php" method="post" onsubmit="return false;">
    <fieldset>
        <legend>Contenido</legend>

         <input type="hidden" name="id" value="<?= $datos['id']?>" />
       
        <label for="type">Tipo</label>
        <select name="type" id="type" class="pure-input-1">
          <option value="">Seleccionar</option>
          <!--Retorna el tipo de contenido que estamos subiendo, si es una página web, o es un post. Esta función debe ser agregada a lib/data.php-->
          <?php $tipo = retornar_tipo_contenido(); ?>
          <?php while(is_array($tipo) && list($k, $v) = each($tipo) ): ?>
            <option value="<?= $k ?>" <?= ($k === $datos['tipo'] )? 'selected' : '' ?> ><?= $v ?></option>
          <?php endwhile; ?>
        </select>
        
        <label for="category" class="only-post">Categoría</label>
        <div class="select-editable only-post">
            <select onchange="this.nextElementSibling.value=this.value" class="pure-input-1">
                <option value=""></option>
                <!-- Retorna las categorías que vayas creando en tu sitio web. -->
                <?php $options_category = cargar_datos_categoria() ?>
                <?php while(is_array($options_category) && list($k, $v) = each($options_category) ): ?>
                  <option value="<?= $v['categoria'] ?>"><?= $v['categoria'] ?></option>
                <?php endwhile; ?>
            </select>
            
        </div>
        
        <label for="title">Titulo</label>
        <input type="text" name="title" placeholder="Titulo" value="<?= $datos['titulo'] ?>" class="pure-input-1">

        <label for="title">URL</label>
        <div class="field">
  <label class="label">Genero</label>
  <div class="select">
  <select name="alias" id="genero" required="">
    <!-- Se imprimen todos los datos de enlaces de la tabla menu, dentro de un select -->
    <?php while(is_array($res) && list($k, $v) = each($res) ): ?>
         
            <option value="<?= $v['url'] ?>"><?= $v['nombre'] ?></option>
            
          <?php endwhile; ?>

  </select>
</div>
</div>
        
        
        <label for="type">Contenido</label>
        <div class="adjoined-bottom">
          <div class="grid-container">
              <div class="grid-width-100">
                  <div id="editor">
                    <?= urldecode($datos['contenido']) ?>
                  </div>
              </div>
          </div>
        </div>
        <input type="hidden" name="content" id="content">
        
        <button type="submit" id="send" class="pure-button pure-button-primary">Guardar</button>
        <a class="btn btn-danger" href="<?= Config::URL.'admin/page-consultar.php' ?>" role="button">Regresar</a>
    </fieldset>
</form>
  <!--Incluimos el archivo footer.php, en donde se encuentra todo nuestro pie de pagina-->
<?php include 'footer.php'; ?>