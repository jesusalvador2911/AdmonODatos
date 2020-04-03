<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$wagenda = "agenda.csv";
$Registro= array();
if (file_exists($wagenda)){
    $numlineas = count(file($wagenda));
}
else{
    $numlineas = 0;
}
$Registro[]= $numlineas+1;
$Registro[]=$_POST['nombre'];
$Registro[]=$_POST['apellidos'];
$Registro[]=$_POST['fnacimiento'];
$Registro[]=$_POST['estadocivil'];
$Registro[]=$_POST['origen'];
$Registro[]=$_POST['correo'];
$Registro[]=$_POST['redess'];
$fp =fopen($wagenda,"a") or die ("No se puede abrir el archivo: $wagenda");
    $resp = fputcsv($fp, $Registro, ',', '"', '"');
    if ($resp === false) {
        die("Error al escribir en CSV");
    }
fclose($fp) or die("No se puede cerrar el archivo: $wagenda");
echo ("<h1> Se agregó el contacto a la agenda: $wagenda </h1> ");
header("refresh:3; url=contactos.php");




?>

</body>
</html>