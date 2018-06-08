<?php

  require("connect_db.php");

  class productos{


    public $nombre;
	public $codigo_categorias_productos;
	public $id_proveedores;
	public $cantidad;
	public $peso;
	public $medida;
	public $precio;
	public $estado;
	

	public function productos(){


$this->nombre = $_POST ['nombre'];
$this->codigo_categorias_productos = $_POST['codigo_categorias_productos'];
$this->id_proveedores = $_POST['id_proveedores'];
$this->cantidad = $_POST['cantidad'];
$this->peso = $_POST['peso'];
$this->medida = $_POST['medida'];
$this->precio = $_POST['precio'];
$this->estado = $_POST['estado'];




	}
}
	  
            mysqli_query($mysql,"INSERT INTO productos(nombre,codigo_categorias_productos,id_proveedores,cantidad,peso,medida,precio,estado) values 
            	('$_REQUEST[nombre]', 
            	 '$_REQUEST[categorias]', 
            	 '$_REQUEST[proveedor]', 
            	 '$_REQUEST[cantidad]', 
            	 '$_REQUEST[peso]', 
            	 '$_REQUEST[medida]', 
            	 '$_REQUEST[precio]', 
            	 '1')
            	 ")
			or die($mysql->error);
			
			if(!$mysql){
				
			  echo '<script>alert("SE HA AÑADIDO EL PRODUCTO CORRECTAMENTE")</script> ';
			  header('Location:tablaproductos.php');
			
			}else{
			  
			  echo '<script>alert("NO SE PUDO AÑADIR EL PRODUCTO CORRECTAMENTE")</script> ';
			  header('Location:tablaproductos.php');
			  
			}
			  	
            $mysql->close();
?>