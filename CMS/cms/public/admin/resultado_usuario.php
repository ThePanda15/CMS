<?php
$path = dirname(__FILE__);
//Incluimos el archivo config.php ubicado en la carpeta setting, este se encontrara nuestra conexion a la base de datos
require_once( $path . '/../../setting/config.php');
//Incluimos el archivo mysql.php ubicado en la carpeta setting, este archivo permite realizar todas las operacion CRUD, la conexion, realizar consultas y cerrar la conexion una vez terminada su uso.
require_once( $path . '/../../setting/mysql.php');


//Obtenemos los datos madados desde la modal en el archivo consultar-usuarios.php
$id = $_POST['id'];
$nom = $_POST['nom'];
$usr = $_POST['usr'];
$passwd = $_POST['passwd'];
$correo = $_POST['correo'];

//Si el id mandado es mayor a 0, quiere decir que ya existe un dato, y se deseara modificar.
if($id > 0){
//Consulta SQL, permite la actualizacion de los datos
  $sql = <<<SQL
  UPDATE usuarios SET nombre = '$nom', usuario= '$usr', pass = '$passwd', correo = '$correo' WHERE idU='$id'
SQL;
}else{
	//De lo contrario si el id es menor a 0, quiere decir que aun no se crea ese datos, por lo que se debera de insertar un nuevo dato
  //Consulta SQL, permite la actualizacion de los datos
  $sql = <<<SQL
  INSERT INTO usuarios (nombre, usuario, pass, correo) VALUES ('$nom', '$usr', '$passwd', '$correo')
SQL;
}

//Respuesta SQL de acuerdo a si se realizo la operacion exitosamente.
$mysql = new Mysql();
$response = ( $mysql->execute($sql) ) ? 'Contenido guardado exitosamente!' : 'Error al guardar contenido.';
//Redireccionamos a la pagina en donde todos los menus se encuentran.
header("Location: consultar-usuarios.php");

?>