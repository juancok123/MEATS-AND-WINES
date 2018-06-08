<!DOCTYPE html>
<html lang="es">
<head>

<link href="../css/bootstrap.min.css" rel="stylesheet">
   
<link href="../css/business-casual.css" rel="stylesheet">

<meta charset="utf-8">
 <script type="text/javascript">
    function Confirmacion(id,accion) {
        var answer = confirm("Deseas eliminar este registro?")
        if (answer){
          //codigo de aceptar
          //sirve para llamar otra pagina y pasarle variables como parametros..
          var accion='eliminar';
       location.href='guardar-usuario.php?id='+id+'&accion='+accion;
          }else{
        //codigo de cancelar
          }
      }
</script>

  </head>
  <body>
		</div>
            <div>
                
                <form class="form-horizontal" role="form" id="datos_cotizacion" style="width:1000px; height:50px">
                            
                <div class="row-fluid">
                    <label for="q" class="col-md-2 control-label"></label>
                <div class="col-md-5">
                    <input type="text" class="form-control" id="q" onkeyup='load(1);'>
                </div>
                                                                
                <div class="col-md-3">
                    <button type="button" class="btn btn-default" onclick='load(1);'>
                <span class="glyphicon glyphicon-search" ></span> Buscar</button>
                <span id="loader"></span>
                </div>
                                        
            </div>
    
    </form>
				<div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div'></div><!-- Carga los datos ajax -->

	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
	<script type="text/javascript" src="js/buscar.js"></script>
  </body>
</html>    