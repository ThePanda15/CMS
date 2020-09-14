<?php
$path = dirname(__FILE__);
//Incluimos el archivo config.php ubicado en la carpeta setting, este se encontrara nuestra conexion a la base de datos
require_once( $path . '/../../setting/config.php');
//Incluimos el archivo config.php ubicado en la carpeta setting, este se encontrara nuestra conexion a la base de datos
require_once( $path . '/../../setting/mysql.php');

//Obtenemos del id del cotenido
$id = $_GET['id'];

//Consulta SQL para eliminar 
$sql = <<<SQL
  DELETE FROM contenidos WHERE id='$id'
SQL;


//Respuesta SQL de acuerdo a si se realizo la operacion exitosamente.
$mysql = new Mysql();
$response = ( $mysql->execute($sql) ) ? 'Contenido guardado exitosamente!' : 'Error al guardar contenido.';
//Redireccionamos a la pagina en donde todas las consultas se encuentran.
header("Location: page-consultar.php" );

?>