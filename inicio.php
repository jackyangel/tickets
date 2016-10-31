<?php 
 require_once('seguridad.php');
 require_once('consulta.php');
 $_SESSION["autenticado"] = "si";
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/miestilo.css">
</head>
<body>
	<?php
	   /*if(isset($_GET["errorusuario"]))
	      if($_GET["errorusuario"]=="si"){
	?>
	<script language="javascript">alert("Datos incorrectos");</script>
	<?php 
	}*/
	?>
	<div class="log col-md-4 col-md-offset-4">
	<h1><center>Tickets</center></h1>
	<center><small>Usuario: <?php echo utf8_encode($_SESSION['nombreusr']); ?></small></center>
		<p>A continuación se muestra sus tickets:</p>
		<table class="table table-bordered">
			<tr>
				<td>Numero</td>
				<td>Asunto</td>
				<td>Estado</td>
			</tr>
			  <?php  
		    	  $consulta='select * from ticket';
		    	  if (mysqli_connect_errno()) {
				    printf("Falló la conexión: %s\n", mysqli_connect_error());
				    exit();
						}
				if ($lector = $conexion->query($consulta)) {
				    /* obtener un array asociativo */
				    $i=(int) 0;
				    while ($ticket = $lector->fetch_assoc()) {
				    	echo '<tr class="table-hover">';
				    	echo '<td>'.$ticket["numero"].'</td>';
				    	echo '<td>'.$ticket["asunto"].'</td>';
				    	echo '<td>'.$ticket["estado"].'</td>';
				    	echo "</tr>";
				    }
				     //liberar el conjunto de resultados 
				    $lector->free();
				}
				
		    ?>
			
		</table>
	
	</div>	
</body>