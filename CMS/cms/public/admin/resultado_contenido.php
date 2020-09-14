<?php
$path = dirname(__FILE__);
//Incluimos el archivo config.php ubicado en la carpeta setting, este se encontrara nuestra conexion a la base de datos
require_once( $path . '/../../setting/config.php');
//Incluimos el archivo config.php ubicado en la carpeta setting, este se encontrara nuestra conexion a la base de datos
require_once( $path . '/../../setting/mysql.php');

//Obtenemos los datos mandados desde el archivo 
$content = $_POST['content'];
$id = $_POST['id'];
$title = $_POST['title'];
$type = $_POST['type'];
$category = ($type == 'PAGE') ? '': $_POST['category'];
$date = date('Y-m-d H:i:s');
$alias = $_POST['alias'];
//Si el id mandado es mayor a 0, quiere decir que ya existe un dato, y se deseara modificar.
if($id > 0){
	//Consulta SQL, permite la actualizacion de los datos
  $sql = <<<SQL
  UPDATE contenidos SET titulo = '$title', tipo= '$type', contenido = '$content', categoria = '$category', alias = '$alias' WHERE id='$id'
SQL;
}else{
	 //De lo contrario si el id es menor a 0, quiere decir que aun no se crea ese datos, por lo que se debera de insertar un nuevo dato
  //Consulta SQL, permite la actualizacion de los datos
  $sql = <<<SQL
  INSERT INTO contenidos (titulo, tipo, contenido, categoria, alias) VALUES ('$title', '$type', '$content', '$category', '$alias')
SQL;
}

//Respuesta SQL de acuerdo a si se realizo la operacion exitosamente.

$mysql = new Mysql();
$response = ( $mysql->execute($sql) ) ? 'Contenido guardado exitosamente!' : 'Error al guardar contenido.';
//Redireccionamos a la pagina en donde se encuentran todos los contenidos.
header("Location: " . Config::URL .  "admin/page-respuesta.php?response=$response");

?>