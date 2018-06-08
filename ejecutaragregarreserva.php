<?php
session_start();

  require("connect_db.php");

class reservas{


    public $id_usuario;
	public $fecha;
	public $hora;
	public $zonahoraria;
	public $mesa;
	public $estado;

	public function reservas(){


$this->id_usuario = $_POST ['codigo'];
$this->fecha = $_POST['fecha'];
$this->hora = $_POST['hora'];
$this->zonahoraria = $_POST['zonahoraria'];
$this->mesa = $_POST['mesa'];
$this->estado = $_POST['estado'];


	}

}


            mysqli_query($mysql,"INSERT INTO reservas(id_usuario,fecha,hora,zonahoraria,id_mesa,estado) values ('$_SESSION[codigo]','$_REQUEST[fecha]', '$_REQUEST[hora]', '$_REQUEST[zonahoraria]', '$_REQUEST[mesa]', '1')")
			or die($mysql->error);
			
			if(!$mysql){

			  
			  echo '<script>alert("SE HA RESERVADO CORRECTAMENTE")</script>';
			  header ('Location:tablareservasusu.php');
			  
			
			}else{
			  
			  echo '<script>alert("NO SE PUDO RESERVAR CORRECTAMENTE")</script>';
			  header ('Location:reservacionusu.php');
			  
			}
			  	
            $mysql->close();





?>






