<?php
    include("conexion.php");
    $con=conectar();
    $idtarea=$_GET['tarea'];
    $query="DELETE FROM tareas WHERE idtarea ='$idtarea'";  
    $resultado=mysqli_query($con,$query);
    if($resultado){
       echo'<script> alert("se elimino correctamente");</script>';
       echo' <script>  window.location="index.php"; </script>';
    }
   else{
   echo'<script> alert("OCURRIO UN ERROR");</script>';
   echo' <script>  window.location="index.php"; </script>';
   }
?>   