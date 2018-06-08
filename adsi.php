<!DOCTYPE html>
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

    <title> Detalles </title>

   
    <link href="../css/bootstrap.min.css" rel="stylesheet">

   
    <link href="../css/business-casual.css" rel="stylesheet">

    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


</head> 

<body >

    <div class="brand">MEATS AND WINES</div>
    <div class="address-bar">Cra. 26 #521, Bogotá</div>

    <?php
    include("cabecera.php");
    ?>   

<body>
<center>
<div class="web">
            <div class="box" style="width:350px;height:750px">
            <img src="../img/cookies-img4.png" width="150">            
                 
<br>





<?php



$nombre = $_POST['nombre'];
$Apellido = $_POST['Apellido'];
$Documento= $_POST['Documento'];
$password = $_POST['password'];
$password1= $_POST['password1'];
$fecha = $_POST['fecha'];
$genero = $_POST['genero'];
$telefono = $_POST['telefono'];


echo ("<b>")."NOMBRE".("</b>");

echo ("<br>");
echo $nombre;
echo ("<br>");
echo ("<br>");

echo ("<b>")."APELLIDO ".("</b>");

echo ("<br>");
echo $Apellido;
echo ("<br>");
echo ("<br>");

echo ("<b>")."DOCUMENTO".("</b>");

echo ("<br>");
echo $Documento;
echo ("<br>");
echo ("<br>");

echo ("<b>")."CONTRASEÑA".("</b>");
echo ("<br>");
echo $password; 
echo ("<br>");
echo ("<br>");

echo ("<b>")."FECHA DE NACIEMIENTO".("</b>");

echo ("<br>");
echo $fecha;
echo ("<br>");
echo ("<br>");

echo ("<b>")."GENERO".("</b>");

echo ("<br>");
echo $genero;
echo ("<br>");
echo ("<br>");

echo ("<b>")."TELEFONO".("</b>");

echo ("<br>");
echo $telefono;
echo ("<br>");
echo ("<br>");

?> 



<?php

  require("connect_db.php");
	  
       $checkdocumento=mysqli_query($mysql,"SELECT * FROM registro WHERE Documento='$Documento'");

  if(mysqli_num_rows($checkdocumento)>0){
     echo ' <script language="javascript">alert("Atencion, ya existe el documento designado para un usuario, verifique sus datos");</script> ';
      echo "<script>location.href='login.php'</script>";
  
      
      exit();
      } 


    if($password!=$password1){
      
        echo ' <script language="javascript">alert("TUS CONTRASEÑAS NO COINCIDEN");</script> ';
      echo "<script>location.href='login.php'</script>";
      exit();
      }  
        

            mysqli_query($mysql,"INSERT INTO registro(nombre,Apellido,Documento,password,fecha,genero,telefono,pasadmin,rol) values ('$_REQUEST[nombre]', '$_REQUEST[Apellido]', '$_REQUEST[Documento]', '$_REQUEST[password]', '$_REQUEST[fecha]', '$_REQUEST[genero]', '$_REQUEST[telefono]', '', '2')")
			or die($mysql->error);
			
			if(!$mysql){
				
			echo ' <script language="javascript">alert("USUARIO REGISTRADO CON EXITO");</script> ';
						
			}
				
			else{
			
			echo ' <script language="javascript">alert("USUARIO REGISTRADO CON EXITO");</script> ';
			
			}	
      

	$mysql->close();

?>


   <center>
   <h4>Estos son sus datos</h4><br>
   <h5>¿Quieres volverte a registar?</h5>
    <a href="resgistrar.php" button class="btn btn-lg btn-primary btn-block btn-sm" type="button" style="width:200px">Correcto</button></a>
      </center>
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