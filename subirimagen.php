<?php 
/* print_r($_FILES);
echo'<br>';
echo 'nombre de la imagen: ';
print_r($_FILES['imagen']['name']);

echo'<br>';
echo 'tipo de la imagen: ';
print_r($_FILES['imagen']['type']);

echo'<br>';
echo 'ruta temporal de la imagen: ';
print_r($_FILES['imagen']['tmp_name']);
 

$conexion=mysqli_connect('localhost','root','') or die('No hay conexión a la base de datos');
$db=mysqli_select_db('technology_dunk',$conexion)or die('no existe la base de datos.');
*/

	///// CONEXION A LA BASE DE DATOS /////////
	$usuario='root';
	$contraseña='';
	$host='localhost';
	$base='technology_dunk';

	try {
   		$conexion = new PDO('mysql:host='.$host.';dbname='.$base, $usuario, $contraseña);
	} 
	catch (PDOException $e) 
	{
	    print "¡Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
	
	
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);

$nombre=$_POST['nombre'];
$desc=$_POST['descripcion'];
$precio=$_POST['precio'];
$categorias=$_POST['categorias'];
$estado=$_POST['estado'];

$sql="INSERT INTO platos (nombre,descripcion,imagen,precio,id_categoria,estado) values('".$nombre."','".$desc."','".$rutaDestino."','".$precio."','".$categorias."','1')";
$consulta=$conexion->query($sql);

if ($consulta){
	echo '<script>alert("SE INSERTO")</script>';
	echo "<script>location.href='platos.php'</script>";
	
}else{
    echo '<script>alert("NO SE PUEDO INSERTAR PLATO")</script>';
	echo "<script>location.href='agregarplatos.php'</script>";
} 

?>