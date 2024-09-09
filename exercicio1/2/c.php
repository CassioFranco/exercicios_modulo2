<?php
    echo "digite o valor que gostaria que realizasse o reajuste: ";
    $valor = readline();
    $ajuste = $valor * 0.01;
    $total = $valor + $ajuste;

    echo "O valor com 1% de aumento é: $total \n" ;