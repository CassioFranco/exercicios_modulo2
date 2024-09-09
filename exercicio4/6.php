<?php

$vetor_a = [];
$vetor_b = [];
$resultado = [];


echo "Digite 10 números para o vetor A: \n";
for ($i = 0; $i < 10; $i++) {
    echo "Número para a posição " . ($i + 1) . ": ";
    $numero =readline();
    $vetor_a[] = $numero;
}


echo "Digite 10 números para o vetor B: \n";
for ($i = 0; $i < 10; $i++) {
    echo "Número para a posição " . ($i + 1) . ": ";
    $numero = readline();
    $vetor_b[] = $numero;
}


for ($i = 0; $i < 10; $i++) {
    $resultado[] = $vetor_a[$i] * $vetor_b[$i];
}


echo "Resultado da multiplicação: \n";
for ($i = 0; $i < 10; $i++) {
    echo "vetor_a[$i] * vetor_b[$i] = " . $vetor_a[$i] . " * " . $vetor_b[$i] . " = " . $resultado[$i] . "\n";
}

