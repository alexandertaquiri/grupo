<!DOCTYPE>
<html>
<head>
  <title>pagina particular</title>
  <meta charset="UTF-8">
  <script type="text/javascript" src="js/registrar.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrapValidator.min.css" rel="stylesheet">
  <link rel=stylesheet href="css/estilos.css" type="text/css" media=screen>
 


</head>

<body class="background">
<h3><a href=index.php><img id=inicio src=imgs/inicio.png></a></h3>
        <link rel="stylesheet" href="css/custom.css">

  <div class="container">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="glory"><span class="glyphicon glyphicon-link"></span>Create new task</h4> 
          </div>
          <div class="modal-body bg-body">
            <div class="panel panel-default">
              <div class="panel-body">
                <form  name="formulario1" method="POST" action="alta_tarea2.php" enctype="multipart/form-data" onsubmit="" >
                  <div class="form-group">
                    <div class="col-md-6 center-block">
                    <label for="pwd">Title:
                    <input type="title" name="titulo" class="form-control" required="required"></label>
                  </div>  
                  </div>
                  <div class="form-group">
                    <div class="col-md-6 center-block">
                      <label for="exp"><span class="glyphicon glyphicon-calendar"></span>Due Date</label>
                      <input id="exp" name="fecha" type="date" max="2018-12-30" class="form-control" required>
                    </div>  
                  </div>
                  <div class="form-group">
                    <div class="col-md-6 center-block">
                      <label for="pwd">Description:
                      <textarea name="descripcion" class="form-control"></textarea>
                    </div>  
                  </div>
                   <div class="form-group">
                    <div class="col-md-4 center-block">
                      <label for="pwd">Done:
                        <input type="checkbox" name="checkbox" class="form-control">
                      </label>
                    </div>  
                  </div>
                  
                   <div class="form-group">
                      <div class="col-md-4 center-block">
                        <button  type="submit" class="btn btn-success btn-send btn-block" value="Submit"><span class="glyphicon glyphicon-ok"></span>Save</button>
                      </div>
                    </div>    
                   </div>   
                </form>
                
              </div>
            </div>
          </div>
      </div>
    </div>
      
  </div>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrapValidator.min.js"></script>
 

</body>
</html>