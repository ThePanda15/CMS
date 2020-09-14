<!--Incluimos el archivo header.php en donde se encuentran todos nuestros cdn -->
<?php include('header.php'); ?>

<!--Incluimos el archivo index2.php en donde se encuentra el menu del administrador -->
<?php include('index2.php'); ?>
  
  <!-- Se obtienen los datos del menu, desde la funcion cargar_datos_menu del archivvo lib/data.php-->
  <?php $res = cargar_datos_menu(); ?>

   <div class="mid-page" style="text-align:right;" >
    <!--Boton que permite abrir la modal, para agregar nuevo menu-->
      <div id="contact"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#contact-modal">Nuevo Menu</button></div>
   </div>
   <div class="container">  
    <table class="table table-striped table-dark">
      <thead class="thead-dark">
          <tr>
              <th class="p-3 mb-2 bg-info text-white">#</th>
              <th class="p-3 mb-2 bg-info text-white">Nombre</th>
              <th class="p-3 mb-2 bg-info text-white">Enlace</th>
              <th class="p-3 mb-2 bg-info text-white">Orden</th>
              <th class="p-3 mb-2 bg-info text-white">Acciones</th>
          </tr>
      </thead>

      <tbody>
        <!--Ciclo while, que imprime todos los datos de la tabla menu de nuestra base de datos-->
          <?php while(is_array($res) && list($k, $v) = each($res) ): ?>
          <tr>
            <td ><?= $k+1 ?></td>
            <td ><?= $v['nombre'] ?></td>
            <td ><?= $v['url'] ?></td>
            <td ><?= $v['orden'] ?></td>
            <!--Boton por el que se enviara el id del menu-->
             <td ><a href="edit-menu.php?id=<?=$v['idmenu']?>" class="btn btn-success"><i class="far fa-edit"></i>Editar</a>
              <!--Boton por el que se enviara el id del menu-->
              <a href="elimenu.php?id=<?=$v['idmenu']?>" class="btn btn-danger"><i class="fas fa-minus-circle"></i>Eliminar</a>
              <!--Boton por el que se permitira visualizar la pagina-->
              <a href="http://localhost/cms/public/<?= $v['url'] ?>" target="_blank" class="btn btn-primary"><i class="fas fa-eye"></i>Visualizar</a>
            </td>
          </tr>
          <?php endwhile; ?>
      </tbody>
  </table>
</div>


<!--Modal para agregar un nuevo menu -->
<div id="contact-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3>Nuevo menu</h3>
      </div>
      <form action="resultado_menu.php" method="POST" id="contactForm" name="contact" role="form">
        <div class="modal-body">        
          <div class="form-group">
            <label for="nom">Nombre</label>
            <input type="text" name="nom" class="form-control">
          </div>
          <div class="form-group">
            <label for="urlm">Enlace</label>
            <input type="text" name="urlm" class="form-control">
          </div>
          <div class="form-group">
            <label for="ord">Orden</label>
            <input type="text" name="ord" class="form-control">
          </div>
                  
        </div>
        <div class="modal-footer">          
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-success" id="submit">
        </div>
      </form>
    </div>
  </div>
</div>
<!--Fin modal -->

<!--Incluimos el archivo footer.php, en donde se encuentra todo nuestro pie de pagina-->
<?php include('footer.php'); ?>