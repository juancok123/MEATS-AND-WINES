<?php

  require("connect_db.php");
	  
            mysqli_query($mysql,"INSERT INTO categorias_productos(nombre) values ('$_REQUEST[nombre]')")
			or die($mysql->error);
			
			if(!$mysql){
				
			  echo '<script>alert("SE HA AÑADIDO LA CATEGORIA CORRECTAMENTE")</script> ';
			  header('Location:tablaproductos.php');
			
			}else{
			  
			  echo '<script>alert("NO SE PUDO AÑADIR LA CATEGORIA CORRECTAMENTE")</script> ';
			  header('Location:tablaproductos.php');
			  
			}
			  	
            $mysql->close();
?>