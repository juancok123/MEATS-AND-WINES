<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['nombre']) {
    header("Location:login.php");
}if ($_SESSION['rol']==2) {
    header("Location:admin.php");
}if ($_SESSION['rol']==0) {
	header("location:login.php");
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

    <title>ADMINISTRADOR</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
   
    <link href="../css/business-casual.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

	
</head> 

<body >

    <div class="brand">MEATS AND WINES</div>
    <div class="address-bar">Cra. 26 #521, Bogotá</div>
    
    <?php
    require("cabeceraadmin.php");
    ?>
	<center>
    <div class="box" style="width:900px;">
        <div class="row-fluid">

      	<img src="../img/letrero bienvenidos.jpg" height="403" width="843">
        
   	</head>
    <body>    

        <br>
        
        <h2 class="brand-before">
                        <small>Bienvenidos A</small>
                    </h2>
                    <h1 class="brand-name">MEATS AND WINES</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>TECHNOLOGY DUNK</strong>
                        </small>
            
        <div class="span8">
        
        </div>  
        </div>
        </div>
        </center>
        <br>
    
    <div class="container">
    <center>
       
            </center>
            </div>
           </div>
          </div>
         </div>
        </div><!-- /card-container -->
    </div><!-- /container --> 
  </center>
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
