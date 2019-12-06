<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Ficha De Identificación</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <style type="text/css">
      img {border-width: 0}
      * {font-family:'Lucida Grande', sans-serif; font-;}
    </style>

  </head>
  <body id="body1" >
		
		

       
  <p>
               
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<div class="container">
      <form class="contact-us form-horizontal" action="ActionPdf.php" method="post" enctype="multipart/form-data">
        <legend>Ingrese datos de la persona extraviada</legend>
        <img src="img/logopdig5.png" id="img1">
        <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;134
            <br>
            briup@investigaciones.cl</h5>
        <div class="control-group">
            <label class="control-label">Nombre Completo</label>
            <div class="controls">
                <div class="input-prepend">
                <!--<span class="add-on"><i class="fas fa-pen"></i></span>-->
                    <input type="text" class="input-xlarge" name="Nombre" placeholder="Nombre de la persona" index="1000">
                </div>
            </div>
        </div>
		<div class="control-group">
            <label class="control-label">Edad de la Persona</label>
            <div class="controls">
                <div class="input-prepend">
                <!--<span class="add-on"><i class="fas fa-pen"></i></span>-->
                    <input type="number" class="input-xlarge" name="Edad" placeholder="Edad de la persona" max="130" min="1">
                </div>
            </div>    
        </div>
		<div class="control-group">
            <label class="control-label">Estatura de la Persona</label>
            <div class="controls">
                <div class="input-prepend">
                <!--<span class="add-on"><i class="fas fa-pen"></i></span>-->
                    <input type="number" class="input-xlarge" name="Estatura" placeholder="Estatura de la Persona">
                </div>
            </div>
		</div>
		<div class="control-group">
            <label class="control-label">Tez de la Persona</label>
            <div class="controls">
                <div class="input-prepend">
                <!--<span class="add-on"><i class="fas fa-pen"></i></span>-->
                    <input type="text" class="input-xlarge" name="Tez" placeholder="Tez de la Persona">
				</div>
            </div> 		
        </div>
		<div class="control-group">
            <label class="control-label">Iris de la Persona</label>
            <div class="controls">
                <div class="input-prepend">
                <!--<span class="add-on"><i class="fas fa-pen"></i></span>-->
                    <input type="text" class="input-xlarge" name="Iris" placeholder="Iris de la Persona">
				</div>
            </div> 		
        </div>
		<div class="control-group">
            <label class="control-label">Contextura fisica de la Persona</label>
            <div class="controls">
                <div class="input-prepend">
                <!--<span class="add-on"><i class="fas fa-pen"></i></span>-->
                    <input type="text" class="input-xlarge" name="Contextura" placeholder="Contextura de la Persona">
				</div>
            </div> 		
        </div>
		<div class="control-group">
            <label class="control-label">Cabello de la Persona</label>
            <div class="controls">
                <div class="input-prepend">
                <!--<span class="add-on"><i class="fas fa-pen"></i></span>-->
                    <input type="text" class="input-xlarge" name="Cabello" placeholder="Cabello de la Persona">
				</div>
            </div> 		
        </div>
		<div class="control-group">
            <label class="control-label">Vestimenta de la Persona</label>
            <div class="controls">
                <div class="input-prepend">
                <!--<span class="add-on"><i class="fas fa-pen"></i></span>-->
                    <textarea rows="4" cols="50" name="Vestimenta"id="Vestimenta" placeholder="Ingrese toda la informacion necesaria"></textarea>
				</div>
            </div> 		
        </div>
        <div class="control-group">
            <label class="control-label">Fecha de Extravio</label>
            <div class="controls">
                <div class="input-prepend">
                <!--<span class="add-on"><i class="fas fa-pen"></i></span>-->
                    <input type="date" class="input-xlarge" name="Fecha" placeholder="Fecha De Extravio">
                </div>
            </div>    
        </div>
        <div class="control-group">
            <label class="control-label">Lugar de Extravio</label>
            <div class="controls">
                <div class="input-prepend">
                <!--<span class="add-on"><i class="fas fa-pen"></i></span>-->
                    <input type="text" id="url" class="input-xlarge" name="Lugar" placeholder="Lugar De Extravio">
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Insertar imagen</label>
            <div class="controls">
                <div class="input-prepend">
                    <input type="file" id="Foto"name="Foto" size="20" maxlength="100" accept="image/*">
                </div>
            </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn btn-primary">Generar</button>
          </div>    
        </div>
      </form>
      </div>        </p>            




  </body>
</html>
