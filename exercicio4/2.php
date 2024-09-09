<?php

$numeros = [];
$negativos = 0;
$positivos = 0;
$pares = 0;
$impares = 0;

for ($i = 0; $i < 10; $i++) {
    echo "Digite um número: \n" . ($i + 1) . ": ";
    $numero = readline();
    $numeros[] = $numero;


    if ($numero < 0) {
        $negativos++;
    } elseif ($numero > 0) {
        $positivos++;
    }

    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

echo "Quantidade de números negativos: $negativos \n";
echo "Quantidade de números positivos: $positivos \n";
echo "Quantidade de números pares: $pares \n";
echo "Quantidade de números ímpares: $impares \n";
