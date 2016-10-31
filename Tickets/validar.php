<?php
session_start();
$count = (integer) 0;

if(empty($_GET['usu']) || empty($_GET['password']))
{
	echo '<script language="javascript">alert("Es necesario llenar todos los campos");</script>';
	echo '<script type="text/javascript"> window.location.assign("index.php");</script>';
}
require_once('conexion.php');
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
$password=$_GET['password'];
$query = 'SELECT * FROM usuarios WHERE idusuario =  "'.$_GET['usu'].'" AND PASSWORD =  "'.$password.'"';
$lector = $conexion->query($query);
$count = $lector->num_rows;
$datos = $lector->fetch_assoc();
$lector->close();
		if ($count==1) {
			$_SESSION["autenticado"] = "si";
      		$_SESSION["usuario"] = $_GET['usu'];
      		$_SESSION["nombreusr"] = $datos["nombre"]." ".$datos["apellido"];
      		//echo '<script language="javascript">alert("'.$datos["nombres"].'");</script>';
			echo '<script fetch_assoc()type="text/javascript"> window.location.assign("inicio.php");</script>';
		}
		else{
			echo '<script type="text/javascript"> window.location.assign("index.php?errorusuario=si");</script>';
		}

?>