<?php
//CONEXION BASE DE DATOS//
  
  require("connect_db.php");
  
  //CODIGO DE MODIFICACION DE REGISTRO//
  $mysql->query("update registro set nombre='$_REQUEST[nombre]'
  where codigo=$_REQUEST[codigo]") or
  die($mysql->error());
  $mysql->query("update registro set Apellido='$_REQUEST[Apellido]'
  where codigo=$_REQUEST[codigo]") or
  die($mysql->error());
  $mysql->query("update registro set Documento='$_REQUEST[Documento]'
  where codigo=$_REQUEST[codigo]") or
  die($mysql->error());
  $mysql->query("update registro set password='$_REQUEST[password]'
  where codigo=$_REQUEST[codigo]") or
  die($mysql->error());
  $mysql->query("update registro set fecha='$_REQUEST[fecha]'
  where codigo=$_REQUEST[codigo]") or
  die($mysql->error());
  $mysql->query("update registro set genero='$_REQUEST[genero]'
  where codigo=$_REQUEST[codigo]") or
  die($mysql->error());
  $mysql->query("update registro set telefono='$_REQUEST[telefono]'
  where codigo=$_REQUEST[codigo]") or
  die($mysql->error());
  $mysql->query("update registro set pasadmin='$_REQUEST[pasadmin]'
  where codigo=$_REQUEST[codigo]") or
  die($mysql->error());

  echo '<script>alert("SE HAN ACTUALIZADO LOS DATOS CORRECTAMENTE")</script> ';
  $mysql->close();
  header('Location: tablausuarios.php');
?>
