<?php
$maior = PHP_INT_MIN;
$menor = PHP_INT_MAX;

while (true) {
    $valor = (int)readline("Digite um valor inteiro (0 para sair): ");

    if ($valor === 0) {
        break;
    }

    if ($valor > $maior) {
        $maior = $valor;
    }

    if ($valor < $menor) {
        $menor = $valor;
    }
}

if ($maior === PHP_INT_MIN && $menor === PHP_INT_MAX) {
    echo "Nenhum valor foi fornecido.\n";
} else {
    echo "O maior valor fornecido foi: $maior\n";
    echo "O menor valor fornecido foi: $menor\n";
}

