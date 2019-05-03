<?php
session_start();
include("conexion.php");
$con=conectar();
$tarea=$_GET['id'];
$result=mysqli_query($con,"SELECT titulo,fecha,descripcion,done FROM tareas WHERE idtarea='$tarea'");

// while($row=mysqli_fetch_assoc($result)){
//echo json_encode($row);
 $row=mysqli_fetch_array($result);
echo json_encode($row);
    
?>