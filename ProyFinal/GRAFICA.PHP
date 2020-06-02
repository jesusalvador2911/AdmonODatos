<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Final.</title>
    <link rel="stylesheet" href="./css/chartist.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <script src="./js/chartist.min.js"></script>
    <style>
        body {background-color: withe;}
        </style>
</head>

<body>
    <div class="container">
        <div class="centro">
            <div class="dev">
                <h1>PROYECTO FINAL</h1>
                <h2>25000 CAPTURAS DE DIFERENTES VIVIENDAS CON TELEVISIONES</h1>
                <span class="dev"><b>JESUS SALVADOR VALLES MACIEL 182310671<b></span>
    </div>
            
    <div class="ct-chart ct-minor-seventh"></div>
<?php
                    
                    $archivo = './pantallas.json';
                    
                    $handle = fopen($archivo, 'r')
                    or die("Error: No se puede abrir el archivo json");
                    
                    $size = filesize($archivo);
                  
                    $contenido = fread($handle, $size);
                    
                    fclose($handle);
                    
                    $listpant = json_decode($contenido, true);
                    
                    $lista_labels = array();
                    $lista_valores = array();
                    
                    foreach ($listpant as $numtel => $tv) {
                        $lista_labels[] = $numtel;
                        $lista_valores[] = $tv;
                    }
                    ?>
                    <script>

                    var datos = {

                        labels: [
                            '<?php echo $lista_labels[0]; ?>' + '\n<?php echo $lista_valores[0]; ?> ' + 'personas',
                            '<?php echo $lista_labels[1]; ?>' + '\n<?php echo $lista_valores[1]; ?> ' + 'personas',
                            '<?php echo $lista_labels[2]; ?>' + '\n<?php echo $lista_valores[2]; ?> ' + 'personas',
                            '<?php echo $lista_labels[3]; ?>' + '\n<?php echo $lista_valores[3]; ?> ' + 'personas',
                            '<?php echo $lista_labels[4]; ?>' + '\n<?php echo $lista_valores[4]; ?> ' + 'personas',
                            '<?php echo $lista_labels[5]; ?>' + '\n<?php echo $lista_valores[5]; ?> ' + 'personas'
                        ],
                        series: [{
                            name: 'serie-1',
                            data: [
                                <?php echo $lista_valores[0]; ?>,
                                <?php echo $lista_valores[1]; ?>,
                                <?php echo $lista_valores[2]; ?>,
                                <?php echo $lista_valores[3]; ?>,
                                <?php echo $lista_valores[4]; ?>,
                                <?php echo $lista_valores[5]; ?>
                            ]
                        }]
                    };
            
                    var opciones = {
                        legend: { 
      labels: { 
       fontColor: "black", 
       fontSize: 18 
      } 
     }, 
     scales: { 
      yAxes: [{ 
       ticks: { 
        fontColor: "black", 
        fontSize: 18, 
        stepSize: 1, 
        beginAtZero: true 
       } 
      }], 
      xAxes: [{ 
       ticks: { 
        fontColor: "black", 
        fontSize: 14, 
        stepSize: 1, 
        beginAtZero: true 
       } 
      }] 
     } 
    };
        var opcionesResponsive = [
            ['screen and (min-width: 641px) and (max-width: 1024px)', {
                seriesBarDistance: 10,
                axisX: {
                    labelInterpolationFnc: function (value) {
                        return value;
                    }
                }
            }],
            ['screen and (max-width: 640px)', {
                seriesBarDistance: 3,
                axisX: {
                    labelInterpolationFnc: function (value) {
                        return value[0];
                    }
                }
            }]
        ];
        new Chartist.Bar('.ct-chart', datos, opciones, opcionesResponsive);
            </script>
        </div>
         <h3>En esta grafica se muestra el conteo de un total de 25000 viviendas con panatallas</h3>   
    </div>
    <div style="text-align:center">
        <a href="./t_datos.php" class="btn btn-success">Tabla de contenido</a>
    </div>
</body>
</html>