<?php

function calcular($altura, $sexo) {
    if ($sexo == 'M' || $sexo == 'm') {
        return 72.7 * $altura - 58;
    } elseif ($sexo == 'F' || $sexo == 'f') {
        return 62.1 * $altura - 44.7;
    } else {
        return false;
    }
}

echo "Digite a altura em metros: \n";
$altura = readline();
echo "Digite o sexo (M para masculino, F para feminino): \n";
$sexo = readline();


$pesoideal = calcular($altura, $sexo);


if ($pesoideal !== false) {
    echo "O peso ideal para a altura de $altura  e sexo $sexo é: " . number_format($pesoideal, 2) . " kg.\n";
} else {
    echo " Digite 'M' para masculino ou 'F' para feminino.\n";
}
