<?php include('header.php'); ?>

<?php 

// Initialize site configuration
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST["correo"])&&isset($_POST["passwd"])) {
		//print_r($_POST);
		$correo=$_POST["correo"];
		$pwd=$_POST["passwd"];
		$res = getByCorreoAndPass($correo,$pwd);
		if (count($res)>0){
			session_start();
		header("Location:consultar-usuarios.php");			
		}else{
			header("Location:login.php");
		}
	}
	# code...
}


// Include page view

 ?>