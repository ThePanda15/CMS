<?php
	$path = dirname(__FILE__);
  //Incluimos el archivo config.php ubicado en la carpeta setting, este se encontrara nuestra conexion a la base de datos
	require_once( $path . '/../../../setting/config.php');
  //Incluimos el archivo config.php ubicado en la carpeta setting, este se encontrara nuestra conexion a la base de datos
	require_once( $path . '/../../../setting/mysql.php');

  //Instruccion SQL que selecciona todos los datos de la tabla configuracion y regresa la respuesta en un arreglo
	function cargar_datos_configuracion(){
	  $mysql = new Mysql();
	  $sql = <<<SQL
	    SELECT * FROM configuracion LIMIT 1
SQL;
	  $res = $mysql->search($sql);
	  $res  = $res[0];
	  return $res;
	}

	function cargar_datos_categoria(){
      $mysql = new Mysql();
      $sql = <<<SQL
      SELECT DISTINCT(categoria) as categoria FROM contenidos WHERE categoria != ''
SQL;
      $options = $mysql->search($sql);

      return $options;
    }


    function retornar_tipo_contenido(){
      return ['PAGE'=>'Página', 'POST' => 'Post'];
    }


  function getByCorreoAndPass($corr,$pass){
  
      $mysql = new Mysql();
      $sql = <<<SQL
      SELECT * FROM usuarios WHERE correo='$corr' AND pass = '$pass';
SQL;
      $res = $mysql->search($sql);
      return $res;
    }

    //Instruccion SQL que selecciona todos los datos de la tabla contenidos y regresa en la variable $res
    function cargar_datos_contenidos(){
  
      $mysql = new Mysql();
      $sql = <<<SQL
      SELECT * FROM contenidos
SQL;
      $res = $mysql->search($sql);
      return $res;
    }

    //Instruccion SQL que selecciona todos los datos de la tabla usuarios y regresa en la variable $res
    function cargar_datos_usuarios(){
  
      $mysql = new Mysql();
      $sql = <<<SQL
      SELECT * FROM usuarios
SQL;
      $res = $mysql->search($sql);
      return $res;
    }

    //Instruccion SQL que selecciona todos los datos de la tabla menus ordenados por el campo orden y regresa en la variable $res
   function cargar_datos_menu(){
  
      $mysql = new Mysql();
      $sql = <<<SQL
      SELECT * FROM menus ORDER BY orden ASC
SQL;
      $res = $mysql->search($sql);
      return $res;
    }



    function cargar_contenido($id){
  
      if($id > 0){
        $mysql = new Mysql();
        $sql = <<<SQL
        SELECT * FROM contenidos WHERE id = '$id'
SQL;
        $res = $mysql->search($sql);
        $res = $res[0];  
    
        $type = $res['tipo'];
    
      }else{
        $res = array();
      }
      return $res;
    }



        //Instruccion SQL que recibe el id, selecciona todos los datos de la tabla usuarios donde el idU sea igual al id que obtien y regresa en la variable $res
        function cargar_usuarios($id){
  
      if($id > 0){
        $mysql = new Mysql();
        $sql = <<<SQL
        SELECT * FROM usuarios WHERE idU = '$id'
SQL;
        $res = $mysql->search($sql);
        $res = $res[0];  
    
     
    }else{
        $res = array();
      }
     return $res;
  }

          function cargar_menu($id){
  
      if($id > 0){
        $mysql = new Mysql();
        $sql = <<<SQL
        SELECT * FROM menus WHERE idmenu = '$id'
SQL;
        $res = $mysql->search($sql);
        $res = $res[0];  
    
     
    }else{
        $res = array();
      }
     return $res;
  }
?>