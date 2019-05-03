<!DOCTYPE>
<html>
<head>
  <title>page</title>
  <meta charset="UTF-8">
  <script type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrapValidator.min.css" rel="stylesheet">
  <link rel=stylesheet href="css/estilos.css" type="text/css" media=screen>
  <link type="text/javascript">
  
        <link rel="stylesheet" href="css/custom.css">


</head>

<body class="background">
  <div class="container">
  	 <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="glory"><span class="glyphicon glyphicon-link"></span>My to-do list</h4> 
          </div>
          <div class="modal-body bg-body">
            <div class="panel panel-default">
              <div class="panel-body">
              <div>
                <table>
            <?php
               echo"
                <tr>
                  <th abbr='check' scope='col'></th>
                  <th abbr='algo' scope='col' ></th>
                  <th abbr='algo' scope='col' ></th>
                  </tr>            
                  ";
              include("conexion.php");
              echo "<tr>";
              $con=conectar();
              $iduser=$_SESSION['id']; 
              $resul=mysqli_query($con,"SELECT * FROM tareas WHERE idUsuario='$iduser' ORDER BY tareas.idtarea DESC");
              while($row=mysqli_fetch_array($resul)){
              // array_push($idcarac,$row3['idCaracteristica']);

                if($row['done']=='1'){//si es 1 le setteo al input con checked sino sin checked en el listar tareas
                  
                  echo "<tr><td><input type='checkbox' checked value=".$row['idtarea'].">".$row['titulo']."</td>";  
                  echo "<td><h5><a href=modificar_tarea.php?tarea=".$row['idtarea']."><img id=inicio src=imgs/modificar.jpg></a></h5></td>";
                  echo "<td><h5><a id='eliminar' onclick='return confirmarTarea()' ; href=borrar_tarea.php?tarea=".$row['idtarea']."><img id=inicio src=imgs/eliminar.jpg></a></h5></td></tr>";
                }
               

                else{
                      echo "<tr><td><input type='checkbox' value=".$row['idtarea'].">".$row['titulo']."</td>";
                      echo "<td><h5><a href=modificar_tarea.php?tarea=".$row['idtarea']."><img id=inicio src=imgs/modificar.jpg></a></h5></td>";
                      echo "<td><h5><a id='eliminar' onclick='return confirmarTarea()' ; href=borrar_tarea.php?tarea=".$row['idtarea']."><img id=inicio src=imgs/eliminar.jpg></a></h5></td></tr>";
                    }
                }
                echo "</tr>"; 
              
            ?>
            </table>
  	   		</div>
          <div class="col-md-4 center-block">
            <button  type="submit" class="btn btn-success btn-send btn-block" onClick="location.href='alta_tarea.php'"><span class=""></span>Create new to-do item</button>
          </div>
  	   </div>
  	 	
  	 </div>        
    </div>
  </div>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrapValidator.min.js"></script>
  <script src="js/confirmar_borrar.js"></script>
</body>
</html>