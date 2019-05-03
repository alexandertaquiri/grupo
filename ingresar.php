<!DOCTYPE>
<html>
<?php
if(isset($_GET['msj'])){
   $mensaje= $_GET['msj'];
//
   if($mensaje="1")
   echo"<script> alert ('USUARIO O CONTRASEÑA INVALIDA')</script>"; 
}?>
<head>
<?PHP
include("clases.php");

try{
$login = new Login;
$OK=$login->autorizar();
header("Location:index.php");
}
catch( Exception $e){
   $mensaje= $e->getMessage();

}?>  

  
  
  <title>pagina particular</title>
  <meta charset="UTF-8">
  <script type="text/javascript" src="js/registrar.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrapValidator.min.css" rel="stylesheet">
  
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
                <form  name="formulario2" method="POST" action="ingresar2.php" enctype="multipart/form-data" onsubmit="return validarusu();" >
                  <div class="form-group">
                    <div class="col-md-6 center-block">
                    <label for="pwd">Username:
                    <input type="text" name="usuario" class="form-control" required="required"></label>
                  </div>  
                  </div>
                  <div class="form-group">
                    <div class="col-md-6 center-block">
                      <label for="pwd">password:
                      <input type="password" name="clave" class="form-control" minlength="6" maxlength="20" required="required"></label>
                    </div>  
                  </div>
                  <div class="form-group">
                      <div class="col-md-4 center-block">
                        <button  type="submit" class="btn btn-success btn-send btn-block"  value="Submit"><span class="glyphicon glyphicon-ok"></span> Log me in</button>
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