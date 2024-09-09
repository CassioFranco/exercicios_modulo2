<?php
$array = [];


$valor = 5; 

while (count($array) < 10) {
    $array[] = $valor; 
    $valor += 5; 
}


foreach ($array as $elemento) {
    echo $elemento . "\n";
}
