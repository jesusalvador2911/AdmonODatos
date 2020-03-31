<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="./css/bootstrap.main.css">
    <link rel="stylesheet"href="./css/estilos.css">
    <title>Territorios</title>
</head>
<body>
    <?php
    $territory_names2 = "territory_names2.csv";
    $archivo = fopen($territory_names2, "r") or die("No se puede abrir el archivo: $territory_names2 ");
    $datos = array();
    ?>

    <div class="container"> 
        <h1 class="titulo">Territorios del Mundo</h1> 
        <table class="table">   
        <!-- Diseño de tabla--> 
            <thead class="thead-dark"> 
                    <!-- encabezado--> 
                    <tr> 
                        <!-- diseño del renglon de encabezado--> 
                        <th>Abrebiatura</th> 
                        <th>Nombre</th> 
                        <th>Nombre Oficial</th> 
                        <th>Nombres de Ciudadanos</th> 
                    </tr> 
            </thead> 
            <tbody>
            <?php  
            while (($datos = fgetcsv($archivo, 0, ',', '"', '"')) !== false) { 
                print("<tr>");
                foreach ($datos as $campo) { 
                    print("<td>"); 
                    print("$campo"); 
                    print("</td>"); 
                } 
                print("</tr>"); 
            } 
            ?> 
        </tbody> 
    </table> <!-- Termina tabla --> 
</div> 
</body> 
</html>