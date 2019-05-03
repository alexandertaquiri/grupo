<!DOCTYPE html>
<html >
<head>
    <a class="navbar-brand white" href="index.php"><img src="imgs/fav32.png" class="img-responsive"></a>
  <title>pagina particular</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrapValidator.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
        <link rel="stylesheet" href="css/custom.css">

</head>

<body class="background">
    <?php $idtarea = $_GET['tarea'];?>
	<input type="hidden" id="tarea" name="tarea" value="<?php echo $idtarea; ?>" >
	
  <div class="container">
   <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="glory"><span class="glyphicon glyphicon-link"></span>Edit Task</h4> 
          </div>
          <div class="modal-body bg-body">
            <div class="panel panel-default">
              <div class="panel-body">
                <form id="miform" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <div class="col-md-6 center-block">
                    <label for="pwd">Title:
                    <input type="title" id="title" name="title" class="form-control" required="required"></label>
                  </div>  
                  </div>
                  <div class="form-group">
                    <div class="col-md-6 center-block">
                      <label for="exp"><span class="glyphicon glyphicon-calendar"></span>Due Date</label>
                      <input id="date" name="fecha" type="date" max="2018-12-30" class="form-control" required>
                    </div>  
                  </div>
                  <div class="form-group">
                    <div class="col-md-6 center-block">
                      <label for="pwd">Description:
                      <textarea  id="des" name="descripcion" class="form-control"></textarea>
                    </div>  
                  </div>
                   <div class="form-group">
                    <div class="col-md-4 center-block">
                      <label for="pwd">Done:
                        <input id="check" type="checkbox" name="checkbox" class="form-control">
                      </label>
                    </div>  
                  </div>
                  
                    <div class="row">
                      <div class="col-md-4 center-block">
                        <button type="submit" class="btn btn-success btn-send btn-block" form="miform" value="Submit"><span class="glyphicon glyphicon-ok"></span> Save</button>
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
  <script src="js/registrartarea.js"></script>

</body>
</html>