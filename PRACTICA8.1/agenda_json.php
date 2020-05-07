<?php
//requerimos llamar al archivo que iene la clase
// Contacto para poder usarla
require_once('./ClassContacto.php');

//definimos el nombre del archivo para el JSON
$archivo_json = "agenda.json";

//para simular que los contactos vienen de algun lado
// creamos dos objetos de la clase 'Contacto', contacto1 y contacto2
// esta vez no los capturamos desde formulario

$contacto1 = new Contacto(
    "Jesus",
    "Santillana Araiza",
    "2000-02-12",
    "Soltero",
    "Gómez Palacio",
    "jglez@itsl.mx",
    "@jglezz"
);
// inventamos otro contacto
$contacto2 = new Contacto(
    "Jennifer",
    "Salais Palacios",
    "2000-08-02",
    "Soltera",
    "Durango",
    "jSalais@itsl.mx",
    "@Salais"
);

$contactos = array();


$contactos[] = $contacto1;

$contactos[] = $contacto2;

$json_string = json_encode($contactos);


$arch = fopen($archivo_json,'w');
if( $arch == false ) {
    echo ( "Error al abrir el archivo" );
    exit();
}

fwrite($arch,$json_string);

fclose($arch);

echo '<h3>Datos escritos en agenda.json </h3>';
header("refresh:2;url=mostrar_json.php");