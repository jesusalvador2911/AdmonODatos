<?php

require_once('./ClassPelicula.php');

$archivo_json = "peliculas.json";

$Pelicula1 = new Pelicula(
    "Avengers: Endgame",
    "Superhéroes",
    "181 minutos",
    "B",
    "Robert Downey Jr."
);
$Pelicula2 = new Pelicula(
    "Sonic the Hedgehog",
    "Acción",
    "99 minutos",
    "AA",
    "Jim Carrey"
);


$Peliculas = array();

$Peliculas[] = $Pelicula1;

$Peliculas[] = $Pelicula2;

$json_string = json_encode($Peliculas);

$arch = fopen($archivo_json,'w');
if( $arch == false ) {
    echo ( "Error al abrir el archivo" );
    exit();
}   
fwrite($arch,$json_string);
fclose($arch);
echo '<h3>Datos escritos en peliculas.json </h3>';

header("refresh:2;url=mostrar_json.php");