<?php
$path = dirname(__FILE__);
//Incluimos el archivo config.php ubicado en la carpeta setting, este se encontrara nuestra conexion a la base de datos
require_once( $path . '/../../setting/config.php');
//Incluimos el archivo config.php ubicado en la carpeta setting, este se encontrara nuestra conexion a la base de datos
require_once( $path . '/../../setting/mysql.php');

//Consulta SQL que selecciona todos los datos de la tabla configuracion
$mysql = new Mysql();
$sql = <<<SQL
  SELECT * FROM configuracion LIMIT 1
SQL;
$res = $mysql->search($sql);


//Vars
$title = $_POST['title'];
$address = $_POST['address'];
$geolocation = $_POST['geolocation'];

//Si el id mandado es mayor a 0, quiere decir que ya existe un dato, y se deseara modificar.
if( count($res) > 0 ){
	//Consulta SQL, permite la actualizacion de los datos
  $sql = <<<SQL
  UPDATE configuracion SET titulo = '$title' , direccion = '$address', geolocalizacion = '$geolocation'
SQL;
}else{
	//De lo contrario si el id es menor a 0, quiere decir que aun no se crea ese datos, por lo que se debera de insertar un nuevo dato
  //Consulta SQL, permite la actualizacion de los datos
  $sql = <<<SQL
  INSERT INTO configuracion (titulo, direccion, geolocalizacion) VALUES ('$title' ,'$address', '$geolocation')
SQL;
}
//Respuesta SQL de acuerdo a si se realizo la operacion exitosamente.

$response = ( $mysql->execute($sql) ) ? 'Guardado exitoso!' : 'Error al guardar configuración.';
//Redireccionamos a la pagina en donde todos los menus se encuentran.
header("Location: " . Config::URL .  "admin/page-respuesta.php?response=$response");

?>