<?php

$soma = 0;
$quantidade = 0;


echo "Digite os valores inteiros: (digite 0 para terminar)\n";


while (true) {

    $valor = (int)readline();
    

    if ($valor == 0) {
        break;
    }


    $soma += $valor;
    $quantidade++;
}


if ($quantidade > 0) {
    $media = $soma / $quantidade;
} else {
    $media = 0;
}


echo "Somatória: $soma\n";
echo "Média: $media\n";
echo "Quantidade de valores lidos: $quantidade\n";

