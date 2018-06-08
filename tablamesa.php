<!DOCTYPE html>
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

    <title> Tabla Mesas </title>


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
    
        <div class="box" style="width:1100px;">
		<h4>Tabla de Mesas</h4>
        <br>
		<div class="row-fluid">
        	<?php

				require("connect_db.php");
				$sql=("SELECT * FROM mesa");
	
                //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysql,$sql);

				echo "<table border='2'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Numdepersonas</td>";
						echo "<td>ubicacion</td>";
                        echo "<td>estado</td>";
                        echo "<td>habilitar</td>";
                        echo "<td>deshabilitar</td>";
						
					echo "</tr>";
 			    
			?>
            <?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	    echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
                        echo "<td>$arreglo[3]</td>";





                        echo "<td><a href='tablamesa.php?codigo=$arreglo[0]&codigoborrar=2'><img src='../img/eliminar.png' class='img-rounded'/></a></td>";
                        
                        
                        echo "<td><a href='tablamesa.php?codigo=$arreglo[0]&codigohabilitar=2'><img src='../img/aceptar.png' class='img-rounded'/></a></td>";
                        

                        

				    	

                                }

					echo "</table>";

                    extract($_GET);
                    if(@$codigoborrar==2){
        
                    $sqlborrar=("update mesa set estado='0' where id=$_REQUEST[codigo]");
                    $resborrar=mysqli_query($mysql,$sqlborrar);
                    echo ' <script language="javascript">alert("ESTA MESA HA QUEDADO DESHABILITADO");</script> ';
                        
                    echo "<script>location.href='tablamesa.php'</script>";
                }

                echo "</table>";

                    extract($_GET);
                    if(@$codigohabilitar==2){
        
                    $sqlborrar=("update mesa set estado='1' where id=$_REQUEST[codigo]");
                    $resborrar=mysqli_query($mysql,$sqlborrar);
                    echo ' <script language="javascript">alert("ESTA MESA HA QUEDADO HABILITADO");</script> ';
                        
                    echo "<script>location.href='tablamesa.php'</script>";
                }


            ?>

<input type="submit" value="Agregar mesa" onClick="location.href='agregarmesa.php'" class="btn btn-lg btn-primary btn-block btn-sm" style="width: 220px">
<br>
                   <center>
            <div class="box" style="width:1070px;">
            <div class="row-fluid">
            
            <font size=3>Si el Estado de la mesa es igual a "0" esta <font color="#FF0000">DESHABILITADO</font></font>
            
            <br>
            
            <br>
            
            <font size=3>Si el Estado de la mesa es igual a "1" esta <font color="#00CC00">HABILITADO</font></font>
            
            <br>
            
            <div class="span8">  
            </div>
            </div>
            </div>  

    
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>
</center>
</body>

</html>