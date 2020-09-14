<!--Incluimos el archivo header.php en donde se encuentran todos nuestros cdn -->
<?php include('header.php'); ?>
<!--Incluimos el archivo index2.php en donde se encuentra el menu del administrador -->
 <?php include('index2.php'); ?>
<!-- Se obtienen los datos de los contenidos, desde la funcion cargar_datos_contenidos del archivvo lib/data.php, se retornan los valores del vontenido-->
  <?php $res = cargar_datos_contenidos(); $array_type = retornar_tipo_contenido(); ?>
   <div class="mid-page" style="text-align:right;" >
      <a href="page-contenido.php" class="btn btn-primary btn-lg">Nuevo</a>
   </div>
   <div class="container">
    <table class="table table-striped table-dark">
      <thead class="thead-dark">
          <tr>
              <th class="p-3 mb-2 bg-info text-white">#</th>
              <th class="p-3 mb-2 bg-info text-white">Titulo</th>
              <th class="p-3 mb-2 bg-info text-white">Fecha</th>
              <th class="p-3 mb-2 bg-info text-white">Tipo</th>
              <th class="p-3 mb-2 bg-info text-white">Categoría</th>
              <th class="p-3 mb-2 bg-info text-white">Acción</th>
          </tr>
      </thead>

      <tbody>
        <!--Ciclo while, que imprime todos los datos de la tabla que contiene todas nuestras consultas o paginas de nuestra base de datos-->
          <?php while(is_array($res) && list($k, $v) = each($res) ): ?>
          <tr>
            <td><?= $k+1 ?></td>
            <td><?= $v['titulo'] ?></td>
            <td><?= $v['fecha_publicacion'] ?></td>
            <td><?= $array_type [ $v['tipo'] ] ?></td>
            <td><?= $v['categoria'] ?></td>
            <!--Boton por el que se enviara el id del contenido-->
            <td><a href="page-contenido.php?id=<?=$v['id']?>" class="btn btn-success"><i class="far fa-edit"></i>Editar</a>
            <!--Boton por el que se enviara el id del contenido-->
            <a href="eliCont.php?id=<?=$v['id']?>" class="btn btn-danger"><i class="fas fa-minus-circle"></i>Eliminar</a>
            
          </td>

          </tr>
          <?php endwhile; ?>
      </tbody>
  </table>
  </div>
  <!--Incluimos el archivo footer.php, en donde se encuentra todo nuestro pie de pagina-->
<?php include('footer.php'); ?>