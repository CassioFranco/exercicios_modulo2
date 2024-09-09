<?php

function somaedivisao($a, $b, $c) {
    $soma = 0;

   
    for ($i = $b; $i <= $c; $i++) {
        if ($i % $a == 0) {
            $soma += $i;
        }
    }

    return $soma;
}


echo "Digite o valor para A sendo ele maior que 1: \n";
$a = readline();
echo "Digite o valor de b: \n";
$b = readline();
echo "Digite o valor de c: \n";
$c = readline();


if ($a > 1) {
    $resultado = somaedivisao($a, $b, $c);
    echo "A soma dos números entre $b e $c que são divisíveis por $a é: $resultado\n";
} else {
    echo "deve ser maior que 1.\n";
}

