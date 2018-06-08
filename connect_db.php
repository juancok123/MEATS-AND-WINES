<?php 
  //conectamos con el servidor
	 $mysql=new MySQLi("localhost","root","","technology_dunk");
	 if ($mysql->connect_error)
	 die("Problemas con la conexión a la base de datos");
?>