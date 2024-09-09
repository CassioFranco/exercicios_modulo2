<?php

$A = [];
$C = [];


for ($i = 0; $i < 10; $i++) {
    echo "Digite o número para a posição " . ($i + 1) . " do vetor A: \n";
    $numero = readline();
    $A[] = $numero;
}

echo "Digite um número para a variável B: \n";
$B =readline();


for ($i = 0; $i < 10; $i++) {
    $C[] = $A[$i] * $B;
}


echo "Vetor C: \n";
foreach ($C as $indice => $valor) {
    echo "C[" . ($indice + 1) . "] = " . $valor . "\n";
}

