<?php


  require("connect_db.php");

  class proveedores{


    public $nombre;
	public $fecha;
	public $direccion;
	public $telefono;
	public $email;
	public $estado;
	

	public function proveedores(){


$this->nombre = $_POST ['nombre'];
$this->fecha = $_POST['fecha'];
$this->direccion = $_POST['direccion'];
$this->telefono = $_POST['telefono'];
$this->email = $_POST['email'];
$this->estado = $_POST['estado'];



	}
}
	  
            mysqli_query($mysql,"INSERT INTO proveedores(nombre, fecha, direccion, telefono, email, estado) values ('$_REQUEST[nombre]', CURDATE(), '$_REQUEST[direccion]', '$_REQUEST[telefono]', '$_REQUEST[email]', '1')")
			or die($mysql->error);
			
			if(!$mysql){
				
			  echo '<script>alert("SE HA AÑADIDO EL PROVEEDOR CORRECTAMENTE")</script> ';
			  header('Location:tablaproveedores.php');
			
			}else{
			  
			  echo '<script>alert("NO SE PUDO AÑADIR EL PROVEEDOR CORRECTAMENTE")</script> ';
			  header('Location:tablaproveedores.php');
			  
			}
			  	
            $mysql->close();
?>