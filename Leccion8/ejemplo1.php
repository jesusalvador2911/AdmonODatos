<?php
$miJson = '{"Pedro":35,"Benito":37,"Joel":43}';
$obj = json_decode($miJson, false);
var_dump($obj);