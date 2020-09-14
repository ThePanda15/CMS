<!--Incluimos el archivo header.php en donde se encuentran todos nuestros cdn -->
<?php include 'header.php' ?>
   <table class="pure-table">
     <tr>
       <td>
         <h4><?= $_GET['response'] ?></h4>
       </td>
     </tr>
     <tr>
       <td>
         <a href="<?= Config::URL.'admin/page-consultar.php' ?>" class="pure-button pure-button-primary">Regresar al menú</a>
       </td>
     </tr>
   </table>
<?php include 'footer.php' ?>