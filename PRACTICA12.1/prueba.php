<?php

$archivoTemps = "./csv/tempMyMWeek.csv";
$handle = fopen($archivoTemps,"r") or die("No se puede abrir el archivo: $archivoTemps");

$d_encabezados = array();
$d_temp_max = array();
$d_temp_min = array();

$d_encabezados = fgetcsv($handle, 0, ',', '"', '"');
$d_temp_max = fgetcsv($handle, 0, ',', '"', '"');
$d_temp_min = fgetcsv($handle, 0, ',', '"', '"');

print (var_dump($d_encabezados));
print('<hr>');
print (var_dump($d_temp_max));
print('<hr>');
print (var_dump($d_temp_min));