<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfica Proyecto Final.</title>
    <link rel="stylesheet" href="./css/chartist.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <script src="./js/chartist.min.js"></script>
    <style>
        body {background-color: #DFDBE5;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='34' height='44' viewBox='0 0 34 44'%3E%3Cg fill='%23c0a7d9' fill-opacity='0.4'%3E%3Cpath fill-rule='evenodd' d='M1 6.2C.72 5.55.38 4.94 0 4.36v13.28c.38-.58.72-1.2 1-1.84A12.04 12.04 0 0 0 7.2 22 12.04 12.04 0 0 0 1 28.2c-.28-.65-.62-1.26-1-1.84v13.28c.38-.58.72-1.2 1-1.84A12.04 12.04 0 0 0 7.2 44h21.6a12.05 12.05 0 0 0 5.2-4.36V26.36A12.05 12.05 0 0 0 28.8 22a12.05 12.05 0 0 0 5.2-4.36V4.36A12.05 12.05 0 0 0 28.8 0H7.2A12.04 12.04 0 0 0 1 6.2zM17.36 23H12a10 10 0 1 0 0 20h5.36a11.99 11.99 0 0 1 0-20zm1.28-2H24a10 10 0 1 0 0-20h-5.36a11.99 11.99 0 0 1 0 20zM12 1a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm0 14a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-3.46-2a2 2 0 1 0-3.47 2 2 2 0 0 0 3.47-2zm0-4a2 2 0 1 0-3.47-2 2 2 0 0 0 3.47 2zM12 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3.46 2a2 2 0 1 0 3.47-2 2 2 0 0 0-3.47 2zm0 4a2 2 0 1 0 3.47 2 2 2 0 0 0-3.47-2zM24 43a10 10 0 1 0 0-20 10 10 0 0 0 0 20zm0-14a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3.46 2a2 2 0 1 0 3.47-2 2 2 0 0 0-3.47 2zm0 4a2 2 0 1 0 3.47 2 2 2 0 0 0-3.47-2zM24 37a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-3.46-2a2 2 0 1 0-3.47 2 2 2 0 0 0 3.47-2zm0-4a2 2 0 1 0-3.47-2 2 2 0 0 0 3.47 2z'/%3E%3C/g%3E%3C/svg%3E");}
        </style>
</head>

<body>
    <div class="container">
        <div class="centro">
            <div class="dev">
                <h1>Televisores capturados en Diferentes Viviendas en Scranton.</h1>
                <span class="subt">50 capturas en diferentes viviendas de Scranton dando un total de 2500 televisiones.</span>
                <span class="dev">Elaborado por Iago Brian Lorenzana Reyes.</span>
    </div>
            
    <div class="ct-chart ct-minor-seventh"></div>
<?php
                    
                    $archivo = './json/tvsByEachLivingPlaces.json';
                    
                    $handle = fopen($archivo, 'r')
                    or die("Error: No se puede abrir el archivo json");
                    
                    $size = filesize($archivo);
                  
                    $contenido = fread($handle, $size);
                    
                    fclose($handle);
                    
                    $listaTemper = json_decode($contenido, true);
                    
                    $lista_labels = array();
                    $lista_valores = array();
                    
                    foreach ($listaTemper as $viv => $tvs) {
                        $lista_labels[] = $viv;
                        $lista_valores[] = $tvs;
                    }
                    ?>
                    <script>

                    var datos = {

                        labels: [
                            '<?php echo $lista_labels[0];
                            
                            echo $lista_valores[0]; ?>',
                            '<?php echo $lista_labels[1]; ?>',
                            '<?php echo $lista_labels[2]; ?>',
                            '<?php echo $lista_labels[3]; ?>',
                            '<?php echo $lista_labels[4]; ?>'
                        ],
                        series: [{
                            name: 'serie-1',
                            data: [
                                <?php echo $lista_valores[0]; ?>,
                                <?php echo $lista_valores[1]; ?>,
                                <?php echo $lista_valores[2]; ?>,
                                <?php echo $lista_valores[3]; ?>,
                                <?php echo $lista_valores[4]; ?>
                            ]
                        }]
                    };
            
                    var opciones = {
     
     series: {
         'serie-1': {
             lineSmooth: Chartist.Interpolation.step()
         },
         'serie-2': {
             lineSmooth: Chartist.Interpolation.simple(),
             showArea: true,
         },
         'serie-3': {
             lineSmooth: Chartist.Interpolation.none(),
             showPoint: false
         }
     }
 };

 var opcionesResponsive = [
 ['screen and (max-width: 640px)', {
     series:{
         'serie-1': {lineSmooth: Chartist.Interpolation.none()},
         'serie-2': {lineSmooth: Chartist.Interpolation.none(),showArea: true},
         'serie-3': {lineSmooth: Chartist.Interpolation.none(),showPoint: true}
     }
 }
]
];

new Chartist.Line('.ct-chart', datos, opciones, opcionesResponsive);
</script>
            </script>
        </div>    
    </div>
</body>
</html>