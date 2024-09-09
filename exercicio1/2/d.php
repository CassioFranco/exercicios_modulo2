<?php

    echo "Digite o valor do salario minimo: ";
    $salmin = readline();
    echo "digite a quantidade de quilowatts gastos: ";
    $watts = readline();
    
    $val100watts = $salmin / 7;
    $valwatts= $val100watts / 100;

    
    $wattsfin= $valwatts * $watts;
    $valordes= $wattsfin * 0.1;
    $valorfin= $wattsfin - $valordes;

    echo "O valor de do gasto de quilowatts é: $wattsfin \ne o valor com desconto de 10% é: $valorfin \n";