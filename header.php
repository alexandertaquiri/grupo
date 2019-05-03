<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 5 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<?php
session_start();
?>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <style type="text/css"></style>
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
 
    
<div id="header">
	<?php
	 if(isset($_SESSION['estado'])){
	   if($_SESSION['estado']=="logeado"){ 
	        
	     echo"<h3><a href=index.php></a>Logged as ".$_SESSION['nombre']."  </br><a href=salir.php>log out</a></h3>";
       include("mockups.php");
	?>
  <?php
     } 
  }

	else{
	   include_once("ingresar.php");
  }
	?>
 
</div>
</body>
</html>
