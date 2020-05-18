<?php

require_once('./ClassPelicula.php');

$archivo_json = "peliculas.json";

$Pelicula1 = new Pelicula(
    "Cars",
    "Animación",
    "1h 57m",
    "AA",
    "Owen Wilson, Larry The Cable guy, Paul Newman."
);
$Pelicula2 = new Pelicula(
    "Shrek",
    "Animación",
    "1h 35m",
    "AA",
    "Mike Myers, Eddie Murphy, Cameron Diaz, John Lithgow."
);
$Pelicula3 = new Pelicula(
    "Once Upon a Time in Hollywood",
    "Comedia/Drama",
    "2h 40m",
    "B15",
    "Leonardo Dicaprio, Brad Pitt, Al Pacino, Margot Robbie."
);

$Peliculas = array();

$Peliculas[] = $Pelicula1;

$Peliculas[] = $Pelicula2;

$Peliculas[] = $Pelicula3;
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