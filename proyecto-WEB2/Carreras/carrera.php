
<!DOCTYPE html>
<html>
	<head>
	    <meta charset="UTF-8">
	    <title>Carreras</title>     
	    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="../style2.css">    
	    <script defer src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	    <script type="text/javascript" src="funciones_carrera.js"></script>
	    <script > window.onload = asignarUsuario </script> 
	</head>
		<body >
			<div class="wrapper_">
				<div class="container">
					<div>
						<br>
					</div>	
					<div class="container">
				      	<div class="row">
						  <div class="col-md-9 col-lg-9"> </div>
						  <div class="col-md-3 col-lg-3" >
						  	<p> Usuario: <input type="text" readonly="readonly" value="" id="nombreUsuario"></input> </p> 
						  </div>
						</div>
				    </div>
				    <br><br>	
				    <nav class="navbar navbar-default navbar-static-top" role="navigation">
				     	<div class="rowBarra">
						  <div class="col-md-2"> </div>
						  <div class="col-md-2"> <a class="label label-info" href="../Inicio/inicio.html">INICIO</a></div>
						  <div class="col-md-2"> <a class="label label-info" href="../Estudiantes/estudiante.html">ESTUDIANTES</a></div>
						  <div class="col-md-2"> <a class="label label-info" href="../Carreras/carrera.php">CARRERAS</a></div>
						  <div class="col-md-2"> <a class="label label-info" href="../Usuarios/usuario.html">USUARIOS</a></div>
						  <div class="col-md-2"> </div>
						</div>
				    </nav >
				    <br><br><br>
				    <div class="rowBarra">
				    	<form id="casa" action="funciones_carrera.php" method="post"> 
						  	<div>
						  		<?php
									require('tabla.php');
								?>
						  	</div>	
						  	<div class="botonera">						  		 
						        <input class="btn btn-danger" type="submit" value="Eliminar" name="Eliminar"/> 
						        <button class="btn btn-primary" onclick="FuncionAgregarCarrera()">Agregar</button>				                
						        <button class="btn btn-primary" onclick="FuncionEditarCarrera()">Editar</button>
						        <input  class="btn btn-primary" type="submit" value="ver" name="ver"/>                            
						   	</div>
						</form> 
					</div>				     
				</div> 
			</div>
				
		</body>
</html>

 
	            	
	            	
	            	