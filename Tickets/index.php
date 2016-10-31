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
	   if(isset($_GET["errorusuario"]))
	      if($_GET["errorusuario"]=="si"){
	?>
	<script language="javascript">alert("Datos incorrectos");</script>
	<?php
	}
	?>
	
	<div class="log col-md-4 col-md-offset-4">
	<h1><center>LOGIN</center></h1>
		<form method="get" accept-charset="utf-8" action="validar.php">
			<div class="form-group">
		     <label for="exampleInputEmail1">Usuario</label>
		     <input type="text" class="form-control" name="usu" placeholder="Usuario">
		   </div>
		   <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" name="password" placeholder="Password">
		  </div>
		   <div class="form-group">
		    <div  style="float:right; margin-bottom:10px;">
		      <button type="submit" class="btn btn-success" onclick="">Entrar</button>
		    </div>
		  </div>
		</form>
	</div>	
</body>
</html>	
