<?php
$path = dirname(__FILE__);
//Incluimos el archivo config.php ubicado en la carpeta setting, este se encontrara nuestra conexion a la base de datos
require_once( $path . '/../../setting/config.php');
//Incluimos el archivo config.php ubicado en la carpeta setting, este se encontrara nuestra conexion a la base de datos
require_once( $path . '/../../setting/mysql.php');

//Obtenemos del id del menu
$id = $_GET['id'];


//Consulta SQL para eliminar 
$sql = <<<SQL
  DELETE FROM menus WHERE idmenu='$id'
SQL;

//Respuesta SQL de acuerdo a si se realizo la operacion exitosamente.
$mysql = new Mysql();
$response = ( $mysql->execute($sql) ) ? 'Contenido guardado exitosamente!' : 'Error al guardar contenido.';
//Redireccionamos a la pagina en donde todos los menus se encuentran.
header("Location: consultar-menu.php" );

?>