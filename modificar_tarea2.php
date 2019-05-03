<?php
session_start();
include("conexion.php");
$con=conectar();
$tarea=$_GET['id']; //id esta definido en la clase//   
$t=$_POST['title'];
$f=$_POST['fecha'];
$des=$_POST['descripcion'];
if (isset($_POST['checkbox'])){//array si fuese mas de un checkbox
	if(!empty($_POST['checkbox'])){
		$query= "UPDATE tareas
                        SET  titulo='$t', fecha='$f', descripcion='$des',done='1'
                        WHERE idtarea='$tarea'";
        $resul=mysqli_query($con,$query);
        if($resul){
           echo '<script> alert (" la tarea fue modificada correctamente")</script>';
           echo '<script> window.location ="index.php";</script>';
        }       

    }
}
else{
	$query="UPDATE tareas
                        SET  titulo='$t', fecha='$f', descripcion='$des',done='0'
                        WHERE idtarea='$tarea'";
    $resul=mysqli_query($con,$query);
    if($resul){
    	echo '<script> alert (" la tarea fue modificada correctamente")</script>';
        echo '<script> window.location ="index.php";</script>';
    } 
}      
?>