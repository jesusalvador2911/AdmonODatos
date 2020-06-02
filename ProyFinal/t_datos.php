<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1 class="titulo">Total de vivendas con pantallas</h1>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Con 0 pantallas</th>
                        <th>Con 1 pantalla</th>
                        <th>Con 2 pantallas</th>
                        <th>Con 3 pantallas</th>
                        <th>Con 4 pantallas</th>
                        <th>Con 5 pantallas</th>
                    </tr>
                </thead>
               <tbody>
    <?php
       
            $fp = fopen('datosCrudos.txt', "r");
            $fc = fread($fp, filesize('datosCrudos.txt'));
            $pantallas0 = substr_count($fc, "0");
            /* echo $pantallas0 . "<br>"; */
            $pantallas1 = substr_count($fc, "1");
            /* echo $pantallas1; */
            $pantallas2 = substr_count($fc, "2");
            $pantallas3 = substr_count($fc, "3");
            $pantallas4 = substr_count($fc, "4");
            $pantallas5 = substr_count($fc, "5");
        ///Creacion de json
        $arr_pantallas = array('0 PANTALLAS'=> $pantallas0, '1 PANTALLAS'=> $pantallas1, '2 PANTALLAS'=> $pantallas2, '3 PANTALLAS'=> $pantallas3, '4 PANTALLAS'=> $pantallas4, '5 PANTALLAS'=> $pantallas5);
        $json_string = json_encode($arr_pantallas );
        $file = 'pantallas.json';
        file_put_contents($file, $json_string);
        //creacion de la tabla
        $tam = count($arr_pantallas);
        foreach ($arr_pantallas as $val) {
            echo "<td>" . $val  . "</td>";;
        }
        
    ?>
    <div style="text-align:center">
        <a href="./GRAFICA.php" class="btn btn-success">GRAFICA</a>
    </div>
</body>
</html>