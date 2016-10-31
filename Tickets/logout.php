	<?php  
    session_start();
    session_destroy();
    require_once('conexion.php');
	$result=$conexion->query('delete from compras');
	$conexion->close();
	?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/miestilo.css">
    <title></title>
</head>
<body>
<header>
</header>
<section>
<article>
<div class="log col-md-4 col-md-offset-4">
<center><h1>Has salido del sistema</h1></center>
	<p>
        Para reingresar haz clic en <a href="index.php" class="btn btn-info">este enlace</a>.
    </p>
	
</div>
    
</article>
</section>
</body>
</html>