<!--Incluimos el archivo header.php en donde se encuentran todos nuestros cdn -->
<?php include('header.php'); ?>
<!--Incluimos el archivo index2.php en donde se encuentra el menu del administrador -->
<?php include('index2.php'); ?>
 <!-- Se obtienen los datos de los usuarios, desde la funcion cargar_datos_usuarios del archivvo lib/data.php-->
  <?php $res = cargar_datos_usuarios(); ?>
   <!-- Se obtienen los datos del menu, desde la funcion cargar_usuarios del archivvo lib/data.php-->
  <?php  $datos = cargar_usuarios($_GET[id]); ?>
    <body bgcolor="red">
        
    
   <div class="mid-page" style="text-align:right;" >
    <!--Boton que permite abrir la modal, para agregar nuevo usuario-->
      <div id="contact"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#contact-modal">Nuevo Usuario</button></div>
   </div>
   <div class="container">
    <table class="table table-striped table-dark">
      <thead class="thead-dark">
          <tr>
              <th class="p-3 mb-2 bg-info text-white">#</th>
              <th class="p-3 mb-2 bg-info text-white">Nombre</th>
              <th class="p-3 mb-2 bg-info text-white">Usuario</th>
              <th class="p-3 mb-2 bg-info text-white">Contraseña</th>
              <th class="p-3 mb-2 bg-info text-white">Correo</th>
              <th class="p-3 mb-2 bg-info text-white">Acción</th>
          </tr>
      </thead>

      <tbody>
        <!--Ciclo while, que imprime todos los datos de la tabla usuarios de nuestra base de datos-->
          <?php while(is_array($res) && list($k, $v) = each($res) ): ?>
          <tr>
            
            <th scope="row"><?= $k+1 ?></th>
            <td ><?= $v['nombre'] ?></td>
            <td><?= $v['usuario'] ?></td>
            <td><?= $v['pass'] ?></td>
            <td><?= $v['correo'] ?></td>
             <td>
              <!--Boton por el que se enviar el id del usuario-->
              <a href="edit-usuario.php?id=<?=$v['idU']?>" class="btn btn-success"><i class="far fa-edit"></i>Editar</a>
              <!--Boton por el que se enviar el id del usuario-->
              <a href="eliUsr.php?id=<?=$v['idU']?>" class="btn btn-danger"><i class="fas fa-minus-circle"></i>Eliminar</a></td>          </tr>
          <?php endwhile; ?>
      </tbody>
  </table>
</div>

<!--Modal para agregar un nuevo usuario -->
<div id="contact-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3>Nuevo usuario</h3>
      </div>
      <form action="resultado_usuario.php" method="POST" id="contactForm" name="contact" role="form">
        <div class="modal-body">        
          <div class="form-group">
            <label for="nom">Nombre</label>
            <input type="text" name="nom" class="form-control">
          </div>
          <div class="form-group">
            <label for="usr">Usuario</label>
            <input type="text" name="usr" class="form-control">
          </div>
          <div class="form-group">
            <label for="passwd">Password</label>
            <input type="text" name="passwd" class="form-control">
          </div>
          <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" name="correo" class="form-control">
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
</body>
<!--Incluimos el archivo footer.php, en donde se encuentra todo nuestro pie de pagina-->
<?php include('footer.php'); ?>