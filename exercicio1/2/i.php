<?php

    echo "Quantos carros você vendeu? \n";
    $car=readline();
    echo "Valor total de vendas? \n";
    $totalvendas =readline();
    echo "Qual é seu salário fixo? \n";
    $salfixo = readline();


    $comissao= $car * 100;
    $cinco = $totalvendas * 0.05;
    $salariofinal = $salfixo + $comissao + $cinco;

    echo "Seu salário final é: R$ $salariofinal. \n";