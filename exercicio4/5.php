<?php
$numeros = [];


for ($i = 0; $i < 10; $i++) {
    echo "Digite o número para a posição " . ($i + 1) . ": ";
    $numero = readline();
    $numeros[] = $numero;
}

echo "Os números investidos são: \n";
for ($i = 9; $i >= 0; $i--) {
    echo $numeros[$i] . "\n";
}

