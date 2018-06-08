<!doctype html>

<?php
session_start();
if (@!$_SESSION['nombre']) {
    header("Location:login.php");
}elseif ($_SESSION['rol']==2) {
    header("Location:login.php");
}
?>

<html lang="en">

<head>

  <?php
    require("iconito.php");
    ?>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Agregar Platos</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/business-casual.css" rel="stylesheet">
 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <script  src="../js/jquery-3.2.1.js"></script>


<script  src="../js/jquery.validate.js"></script>
    <script>
      $(document).ready(function(){

        var requerido="es obligatorio";



      jQuery.validator.addMethod("letras", function(value, element) {
  return this.optional( element ) || /^[a-záéóóúàèìòùäëïöüñ\s]+$/i.test( value );
  }, 'Solo se permiten letras.');


      $("#agregaplatos").validate({
        rules:{
          nombre:{
            required:true,
            letras:true

          },
          descripcion:{
            required:true,
            letras:true
          }
        }
          ,
        messages:{
           nombre:{
            required:requerido
            
          },
          messages:{
            descripcion:{
              required:requerido
            }
          }

        }

        
      });
  });

    </script>
    <style type="text/css">
      .error{
        display: block;
      }
    </style>





</head> 


<body >

    <div class="brand">MEATS AND WINES</div>
    
    <div class="address-bar">Cra. 26 #521, Bogotá</div>

    <?php
    require("cabeceraadmin.php");
    ?>    
                      
    <center>              
      <div class="box" style="width:390px">
      <h4>Agregar Platos Nuevos</h4>
      <br>
      <img src="../img/comidap.jpg" width="150">
      <br>
      <br>
      <br>
      <div class="row-fluid">
    
          <form id="form1" name="form1" method="post" action="subirimagen.php" enctype="multipart/form-data">          
          
          <STRONG>Nombre: </STRONG><input type="text" name="nombre" required>
          
          <br>
          <br>
          
          <STRONG>Descripcion: </STRONG><input type="text" name="descripcion" required>

          <br>
          <br>

          <center>
          <STRONG>Imagen: </STRONG>
          
          <br>
           
          <center>
          <label for="adjuntar archivo"></label>
          <input type='file' name='imagen' required>
          </form>
          </center>
          
          <br>
          <br>
          
          <STRONG>Precio: </STRONG><input type="number" name="precio"  required>
          
          <br>
          <br>
          
          <STRONG>Categoria: </STRONG><select name="categorias">
			 <?php
             //CONEXION BASE DE DATOS//
			 
			 require("connect_db.php");

             $platos=$mysql->query("select codigo,nombre from categorias_productos") or
             die($mysql->error);
             while ($reg=$platos->fetch_array())
             {
             echo "<option value=\"".$reg['codigo']."\">".$reg['nombre']."</option>";
             }
             ?>
          </select>
          
          <br>  
          <br>


          
          

          <br>
          <br>

          
          <input type="submit" title="Confirmar" name="submit" value="Enviar" button class="btn btn-lg btn-primary btn-block btn-sm"  style="width:110px" required>
             
          <br>  
          <br>
             
          <input type="submit" value="volver" onClick="location.href='platos.php'" class="btn btn-success btn-primary" style="width: 80px">
             
          </form>          
          
      <div class="span8">
      
          </div>
          
          </div>
          
          </div>                  
                                        
              <footer>
                
                <div class="container">
                        
                  <div class="row">
                                
                     <div class="col-lg-12 text-center">
                                        
                        <p>TECHNOLOGY DUNK</p>
                                    
                     </div>
                            
                  </div>
                    
                </div>
            
              </footer>
    
        
        <script src="js/jquery.js"></script>
    
        <script src="js/bootstrap.min.js"></script>

</body>

</html>