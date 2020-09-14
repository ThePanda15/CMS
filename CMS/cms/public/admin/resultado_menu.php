<?php
$path = dirname(__FILE__);
//Incluimos el archivo config.php ubicado en la carpeta setting, este se encontrara nuestra conexion a la base de datos
require_once( $path . '/../../setting/config.php');
//Incluimos el archivo config.php ubicado en la carpeta setting, este se encontrara nuestra conexion a la base de datos
require_once( $path . '/../../setting/mysql.php');


//Obtenemos los datos madados desde la modal en el archivo consultar-menu.php
$id = $_POST['id'];
$nom = $_POST['nom'];
$urlm = $_POST['urlm'];
$ord = $_POST['ord'];

//Si el id mandado es mayor a 0, quiere decir que ya existe un dato, y se deseara modificar.
if($id > 0){
//Consulta SQL, permite la actualizacion de los datos
  $sql = <<<SQL
  UPDATE menus SET nombre = '$nom', url= '$urlm', orden = '$ord' WHERE idmenu='$id'
SQL;
}else{
  //De lo contrario si el id es menor a 0, quiere decir que aun no se crea ese datos, por lo que se debera de insertar un nuevo dato
  //Consulta SQL, permite la actualizacion de los datos
  $sql = <<<SQL
  INSERT INTO menus (nombre, url, orden) VALUES ('$nom', '$urlm', '$ord')
SQL;
}

//Respuesta SQL de acuerdo a si se realizo la operacion exitosamente.

$mysql = new Mysql();
$response = ( $mysql->execute($sql) ) ? 'Contenido guardado exitosamente!' : 'Error al guardar contenido.';
//Redireccionamos a la pagina en donde todos los menus se encuentran.

header("Location: consultar-menu.php");

?>