<?php
//Incluimos el archivo config.php , este se encontrara nuestra conexion a la base de datos
  require_once( 'config.php');
  //Incluimos el archivo mysql.php , este archivo permite realizar todas las operacion CRUD, la conexion, realizar consultas y cerrar la conexion una vez terminada su uso.
  require_once( 'mysql.php');
  require_once( '../public/lib/snippets.php');

  //Retorna la información general de nuestro sitio web, como el título, la dirección, y cualquier otro dato que quieras configurar en tu web, todos los campos de configuración pasan a una variable global y esta pueda ser accedida desde cualquier lugar de nuestro sitio.
  function info_web(){
    $mysql = new Mysql();
    $sql = <<<SQL
    SELECT * FROM configuracion LIMIT 1
SQL;
    $res = $mysql->search($sql);
    
    while( is_array($res[0]) &&  list($key,$value) = each($res[0]) ){
      $name_var = Config::PREFIX.$key;
      $GLOBALS[$name_var] = $value;
    }
  }
  // Extrae todos los post guardados.
  function posts($category = ''){
    
    $where = (strlen($category) > 0 ) ? "AND categoria = '$category' " : "";
    $mysql = new Mysql();
    $sql = <<<SQL
    SELECT * FROM contenidos WHERE tipo = 'POST' $where
SQL;
    
    $res = $mysql->search($sql);
    return $res;
  }

  //Retorna la página por medio del URI (https://es.wikipedia...cursos_uniforme), esta URI es la cadena que indicamos en el contenido como alias en nuestra base de datos.
  function page(){
    
    $uri = substr($_SERVER['REQUEST_URI'], 1);
    $uri = str_replace(Config::PATH_ROOT, "", $uri);
    
    $mysql = new Mysql();
    $sql = <<<SQL
    SELECT * FROM contenidos WHERE alias = '$uri' LIMIT 1
SQL;
    $res = $mysql->search($sql);

    while( is_array($res[0]) &&  list($key,$value) = each($res[0]) ){
      $name_var = Config::PREFIX_PAGE.$key;
      if($key == 'contenido'){
        $value = analizadorContenido( urldecode($value) );
      }
      $GLOBALS[$name_var] = $value;
    }
    
  }

  //Será el encargado de llamar las funciones que indiquemos en el contenido del post o página que creemos, dichas funciones deben tener el formato [nombreFuncion], o [nombreFuncion:param1,param2]. Si has trabajado con CMS como Wordpress esto lo llaman Shortcode.
 
  function analizadorContenido($contenido){

    $pattern = '/\[[a-z_]+[a-z0-9_]*((:{1}[a-z0-9_\-\s]+)+(,{1}[a-z0-9_\-\s]+)*)*\]/i';
    preg_match_all($pattern, $contenido, $coincidencias, PREG_OFFSET_CAPTURE);
    foreach($coincidencias[0] as $arr ){
      
      $function = $arr[0];
      $lenght_function = strlen($function);
      $pos_string = strpos($contenido, $function);
      $result_function = ejecutarFuncion($function);
      
      $contenido = substr_replace($contenido, $result_function, $pos_string, $lenght_function ); //Pegar resultado de la funcion en el HTML
    }
    
    return $contenido;
  }


  function ejecutarFuncion($function_string){
    $function =  extraerCadena($function_string, "[", "]");
      
    $arr_ftn = explode(":", $function);
    $function_name = $arr_ftn[0];
    $params = explode(",", $arr_ftn[1]);
    
    $result_function = (function_exists($function_name)) ? call_user_func_array($function_name, $params) : $function_string;
    
    return $result_function;
  }

  function  extraerCadena($str, $findBegin, $findEnd){
    $posbegin = strpos($str, $findBegin) + 1;
    $posend = strpos($str, $findEnd);
    return substr($str, $posbegin, $posend-$posbegin);
  }

  //Retorna la información global del sitio, como el título, la dirección, la geolocalización, etc. Dependiendo de los campos que hayamos configurado para nuestro sitio.
  function site_info($var){
    return info(Config::PREFIX, $var);
  }
  //Esta función es igual que site_info, solo que nos va a extraer la información de una página en específico. Como el título, el contenido...
  function page_info($var){
    return info(Config::PREFIX_PAGE, $var);
  }
  function info($prefix, $var){
    $varsite = $prefix.$var; 
    return $GLOBALS[$varsite];
  }


  info_web();
  page( $_GET['page'] );

?>