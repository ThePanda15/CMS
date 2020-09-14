<?php
$path = dirname(__FILE__);
//Incluimos el archivo config.php ubicado en la carpeta setting, este se encontrara nuestra conexion a la base de datos
require_once( $path . '/../../setting/config.php');
//Incluimos el archivo config.php ubicado en la carpeta setting, este se encontrara nuestra conexion a la base de datos
require_once( $path . '/../../setting/mysql.php');
//Obtenemos del id del usuario
$id = $_GET['id'];

//Consulta SQL para eliminar 
$sql = <<<SQL
  DELETE FROM usuarios WHERE idU='$id'
SQL;

//Respuesta SQL de acuerdo a si se realizo la operacion exitosamente.//Respuesta SQL de acuerdo a si se realizo la operacion exitosamente.
$mysql = new Mysql();
$response = ( $mysql->execute($sql) ) ? 'Contenido guardado exitosamente!' : 'Error al guardar contenido.';
//Redireccionamos a la pagina en donde todos los usuarios se encuentran.
header("Location: consultar-usuarios.php" );

?>