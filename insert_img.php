
<?php
include_once("conexion.php");


// Recibo los datos de la imagen
$nombre = $_POST['nombre'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$sql = "INSERT INTO imagenes VALUES(null, '$imagen')"; 
 
//Si existe imagen y tiene un tamaño correcto
$resultado=$conexion->query($sql);

   //si existe la variable pero se pasa del tamaño permitido
   if($resultado){
      echo "se inserto la img"; 
   } else {
      echo "no se inserto"; 
   }
?>

