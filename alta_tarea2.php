<?php
session_start();
include("conexion.php");
$con=conectar();
$iduser=$_SESSION['id']; //id esta definido en la clase//   
$t=$_POST['titulo'];
$f=$_POST['fecha'];
$des=$_POST['descripcion'];
if (isset($_POST['checkbox'])){//array si fuese mas de un checkbox
	if(!empty($_POST['checkbox'])){
		$query="INSERT INTO tareas (titulo,done,fecha,descripcion,idusuario)values('$t','1','$f','$des','$iduser')";
        $resul=mysqli_query($con,$query);
        if($resul){
           echo '<script> alert (" la tarea fue dada de alta correctamente")</script>';
           echo '<script> window.location ="index.php";</script>';
        }       

    }
}
else{
	$query="INSERT INTO tareas (titulo,done,fecha,descripcion,idusuario)values('$t','0','$f','$des','$iduser')";
    $resul=mysqli_query($con,$query);
    if($resul){
    	echo '<script> alert (" la tarea fue dada de alta correctamente")</script>';
        echo '<script> window.location ="index.php";</script>';
    } 
}      
?>