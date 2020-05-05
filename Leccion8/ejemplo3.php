<?php
$json = '{"Pedro":35,"Benito":37,"Joel":43}';
$obj = json_decode($json);
echo $obj->Pedro;
echo '<br>';
echo $obj->Benito;
echo '<br>';
echo $obj->Joel;