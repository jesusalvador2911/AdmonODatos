<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfica de temperaturas mayo 2019</title>
    <link rel="stylesheet" href="./css/chartist.min.css">
    <script src="./js/chartist.min.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    
</head>

<body>
    <div class="container">
        <div class="centro">
            <h1>Temperaturas tomadas durante los 10 dias siguientes</h1>
            <h2>En Drango</h2>
            <span class="temp"><span class="tempbox max">&nbsp;</span>&nbsp; Temperturas Máximas</span>
            <span class="temp"><span class="tempbox min">&nbsp;</span>&nbsp; Temperturas Mínimas</span>
            <span class="subt">Fecha: <b>del 26 de Mayo al 04 de Junio de 2020</b></span>
        </div>
        <div class="ct-chart ct-octave"></div>
    <?php
            $archivoTemps = "./csv/tempMyMWeek.csv";
            $handle = fopen($archivoTemps, "r") or die("No se puede abrir el archivo: $archivoTemps");
            $d_encabezados = array();
            $d_temp_max = array();
            $d_temp_min = array();
            $d_encabezados = fgetcsv($handle, 0, ',', '"', '"');
            $d_temp_max = fgetcsv($handle, 0, ',', '"', '"');
            $d_temp_min = fgetcsv($handle, 0, ',', '"', '"');
            ?>
            <script>

                var datos = {
                 labels: [
                        '<?php echo $d_encabezados[0]; ?>',
                        '<?php echo $d_encabezados[1]; ?>',
                        '<?php echo $d_encabezados[2]; ?>',
                        '<?php echo $d_encabezados[3]; ?>',
                        '<?php echo $d_encabezados[4]; ?>',
                        '<?php echo $d_encabezados[5]; ?>',
                        '<?php echo $d_encabezados[6]; ?>',
                        '<?php echo $d_encabezados[7]; ?>',
                        '<?php echo $d_encabezados[8]; ?>',
                        '<?php echo $d_encabezados[9]; ?>'
                    ],
                    series: [{
                        name: 'serie-1',
                        data: [
                            <?php echo $d_temp_max[0]; ?>,
                            <?php echo $d_temp_max[1]; ?>,
                            <?php echo $d_temp_max[2]; ?>,
                            <?php echo $d_temp_max[3]; ?>,
                            <?php echo $d_temp_max[4]; ?>,
                            <?php echo $d_temp_max[5]; ?>,
                            <?php echo $d_temp_max[6]; ?>,
                            <?php echo $d_temp_max[7]; ?>,
                            <?php echo $d_temp_max[8]; ?>,
                            <?php echo $d_temp_max[9]; ?>
                        ]
                    }, {
                        name: 'serie-2',
                        data: [
                        <?php echo $d_temp_min[0]; ?>,
                        <?php echo $d_temp_min[1]; ?>,
                        <?php echo $d_temp_min[2]; ?>,
                        <?php echo $d_temp_min[3]; ?>,
                        <?php echo $d_temp_min[4]; ?>,
                        <?php echo $d_temp_min[5]; ?>,
                        <?php echo $d_temp_min[6]; ?>,
                        <?php echo $d_temp_min[7]; ?>,
                        <?php echo $d_temp_min[8]; ?>,
                        <?php echo $d_temp_min[9]; ?>
                    ]
                }]
            };
            var opciones = {
                fullWidth: true,
                seriesBarDistance: 30,
                chartPadding: {
                    bottom: 40
                },
                axisX: {
                    position: 'start'
                },
                axisY: {
                    type: Chartist.FixedScaleAxis,
                    ticks: [15, 20, 25, 30, 35, 40],
                    high: 40,
                }
            };
            var opcionesResponsive = [
                ['screen and (min-width: 641px) and (max-width: 1024px)', {
                    axisX: {
                        labelInterpolationFnc: function(value) {
                            return value;
                        }
                    }
                }],
                ['screen and (max-width: 640px)', {
                    seriesBarDistance: 5,
                    axisX: {
                        labelInterpolationFnc: function(value) {
                            return value[0];
                        }
                    }
                }]
            ];
            new Chartist.Line('.ct-chart', datos, opciones, opcionesResponsive);
        </script>
    </div>
</body>
</html>
 