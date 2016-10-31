<?php 
$consulta1 = 'SELECT sum(cantidad) as "cantidad", sum(cantidad)*precio as "precioTotal" FROM compras WHERE producto = "camisa"';
$consulta2 = 'SELECT sum(cantidad) as "cantidad", sum(cantidad)*precio as "precioTotal" FROM compras WHERE producto = "pantalon"';
$consulta3 = 'SELECT sum(cantidad) as "cantidad", sum(cantidad)*precio as "precioTotal" FROM compras WHERE producto = "zapatos"';

require_once('conexion.php');
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
$lector = $conexion->query($consulta1);
$count = $lector->num_rows;
$datos1 = $lector->fetch_assoc();
$lector->close();
//$conexion->close();
		if ($count==1) {
			$producto1= "Camisa";
			$cant = (int) $datos1["cantidad"];
			$pre = (int) $datos1["precioTotal"];
			//echo '<script language="javascript">alert("'.$cant.'");</script>';
		}

$lector2 = $conexion->query($consulta2);
$count2 = $lector2->num_rows;
$datos2 = $lector2->fetch_assoc();
$lector2->close();
		if ($count2==1) {
			$producto2= "Pantalon";
			$cant2 = (int) $datos2["cantidad"];
			$pre2 = (int) $datos2["precioTotal"];
			//echo '<script language="javascript">alert("'.$cant2.'");</script>';
		}

$lector3 = $conexion->query($consulta3);
$count3 = $lector3->num_rows;
$datos3 = $lector3->fetch_assoc();
$lector3->close();
		if ($count3==1) {
			$producto3= "zapatos";
			$cant3 = (int) $datos3["cantidad"];
			$pre3 = (int) $datos3["precioTotal"];
			//echo '<script language="javascript">alert("'.$cant3.'");</script>';
		}
$total = (int) 0;
$total = $pre+$pre2+$pre3;
 ?>