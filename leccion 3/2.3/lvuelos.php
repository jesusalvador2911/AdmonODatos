<?php
$vuelos = array(
    array('id', 'Origen', 'Destino', 'Duración'),
    array('1', 'New York', 'London', '415'),
    array('2', 'Shangai', 'Paris', '760'),
    array('3', 'Istambul', 'Tokyo', '700'),
    array('4', 'New York', 'Paris', '435'),
    array('5', 'Moscow', 'Paris', '245'),
    array('6', 'Lima', 'New York', '455'),
);
$lvuelos = 'vuelos2.csv';
$archivo = fopen($lvuelos, 'w') or die("No se puede abrir el archivo: $nombreArch");
foreach ($vuelos as $vuelo) {
    $resp = fputcsv($archivo, $vuelo, ',', '"', '"');
    if ($resp === false) { die("Error al escribir en CSV"); }
}
fclose($archivo) or die("No se puede cerrar el archivo: $lvuelos");
echo ("<h1> Revisa el archivo: $lvuelos </h1> ");
