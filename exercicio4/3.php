<?php

$numeros = [];


for ($i = 0; $i < 10; $i++) {
    do {
        echo "Digite um número positivo para a posição " . ($i + 1) . ": ";
        $numero = readline();
        if ($numero >= 0) {
            $numeros[] = $numero;
        } else {
            echo "digite um número positivo.\n";
        }
    } while ($numero < 0); 
}


$maior = $numeros[0];
$posicao = 0;

for ($i = 1; $i < 10; $i++) {
    if ($numeros[$i] > $maior) {
        $maior = $numeros[$i];
        $posicao = $i;
    }
}


echo "O maior valor é $maior na posição " . ($posicao + 1) . ".\n";
