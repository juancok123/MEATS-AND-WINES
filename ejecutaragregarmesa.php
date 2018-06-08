<?php


  require("connect_db.php");

class mesa{


    public $numdepersonas;
	public $ubicacion;
	public $estado;
	

	public function mesa(){


$this->nombre = $_POST ['numdepersonas'];
$this->fecha = $_POST['ubicacion'];
$this->hora = $_POST['estado'];



	}
}


	  
            mysqli_query($mysql,"INSERT INTO mesa(numdepersonas,ubicacion,estado) values ('$_REQUEST[numdepersonas]', '$_REQUEST[ubicacion]', '$_REQUEST[estado]')")
			or die($mysql->error);
			
			if(!$mysql){
				
			  echo '<script>alert("SE HA AÑADIDO UNA MESA CORRECTAMENTE")</script> ';
			  header('Location:tablareservas.php');
			
			}else{
			  
			  echo '<script>alert("NO SE PUDO AÑADIR UNA MESA CORRECTAMENTE")</script> ';
			  header('Location:tablareservas.php');
			  
			}
			  	
            $mysql->close();
?>
