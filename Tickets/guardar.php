<?php 
require_once('conexion.php');
$result=$conexion->query('INSERT INTO ticket VALUES(null,"'.$_GET['asunto'].'","Pendiente")');
$conexion->close();
		if ($result) {
			echo '<script language="javascript">alert("Ticket guardado realizada correctamente");</script>';
 			echo '<script type="text/javascript"> window.location.assign("inicio.php");</script>';

		}
		else{

			echo '<script language="javascript">alert("Error");</script>';
 			echo '<script type="text/javascript"> window.location.assign("inicio.php");</script>';
		}
 ?>