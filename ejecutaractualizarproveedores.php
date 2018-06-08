<?php

  //CONEXION BASE DE DATOS//
  
  require("connect_db.php");
  
  //CODIGO DE MODIFICACION DE PROVEEDORES//
  
  $mysql->query("update proveedores set nombre='$_REQUEST[nombre]'
  where id=$_REQUEST[id]") or
  die($mysql->error);
  $mysql->query("update proveedores set direccion='$_REQUEST[direccion]'
  where id=$_REQUEST[id]") or
  die($mysql->error);
  $mysql->query("update proveedores set telefono='$_REQUEST[telefono]'
  where id=$_REQUEST[id]") or
  die($mysql->error);
  $mysql->query("update proveedores set email='$_REQUEST[email]'
  where id=$_REQUEST[id]") or
  die($mysql->error);

  echo '<script>alert("SE HAN ACTUALIZADO LOS DATOS CORRECTAMENTE")</script> ';
  $mysql->close();
  header('Location:tablaproveedores.php');
?>
