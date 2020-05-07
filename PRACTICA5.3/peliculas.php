<?php require_once('./ClaseMiXML.php'); 
$archivo = "miArchivo.xml"; 
$xml = new miXML($archivo); 
if (!file_exists($archivo)){        
$xml->crearXMLFile(); 
} 

$nums = $xml->existenValores();
if ($nums == -1) { 
die ('Error al leer XML'); 
} 
//captura de datos 
$tit = $_POST['titulo']; 
$año = $_POST['agno']; 
$clasificacion = $_POST['clasificacion']; 
$genero=$_POST['genero']; 

$nums +=1;

$xml->insertePelicula($nums,$tit,$año,$genero,$clasificacion); 
echo '<p>Registro completado con éxito...</p>'; 
header("refresh:3;url=verPeliculas.php"); 
?>