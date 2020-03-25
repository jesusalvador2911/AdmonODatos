<?php
$leerTerritorios = "territory_names.csv";
$archivo = fopen($leerTerritorios,"r") or die("No se puede abrir el archivo: $leerTerritorios");;
$datos = array();
print("<table>");
while(( $datos = fgetcsv($archivo, 0, ',', '"', '"')) !== False){
print("<tr>");
    foreach($datos as $campo){
        print("<td>"); //imprimimos el dato: campo 
        print("$campo"); //imprimimos el cierre de </td> 
        print("</td>");
    } 
    //imprimimos el cierre del renglon de tabla </tr> 
    print("</tr>");
} 
//imprimimos el cierre de la tabla 
print("</table>");
