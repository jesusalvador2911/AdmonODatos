<?php
$json = '{"Pedro":35,"Benito":37,"Joel":43}';
$arr = json_decode($json, true);
echo $arr["Pedro"];
echo '<br>';
echo $arr["Benito"];
echo '<br>';
echo $arr["Joel"];