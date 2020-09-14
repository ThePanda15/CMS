<?php require_once(dirname(__FILE__) . '/../setting/core.php' ); ?>
<!--Incluimos el archivo header.php en donde se encuentran todos nuestros cdn -->
<?php include('admin/header.php'); ?>
<!-- Se obtienen los datos de los menus, desde la funcion cargar_datos_menu del archivvo lib/data.php-->
<?php $res = cargar_datos_menu(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <div class="container"> 
  <title><?= site_info('titulo') .' - '. page_info('titulo') ?></title>
  </div>
</head>
<body>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="imagenes/logo.png" style="width: 60%"><a class="navbar-brand" href="#"></a></img>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <?php while(is_array($res) && list($k, $v) = each($res) ): ?>
          
            
            <li><a href="http://localhost/cms/public/<?= $v['url'] ?>"><?= $v['nombre'] ?></a></li>
        <?php endwhile; ?>    
            
      
    </ul>
  </div>
</nav>
<div class="container"> 
 <h1 class="text-center"><?= site_info('titulo') ?></h1>
</div>
 <?= page_info('contenido') ?>




 <small><?= site_info('titulo') ?> todos los derechos reservados. Dirección: <?= site_info('direccion') ?></small>  
</body>
</html>