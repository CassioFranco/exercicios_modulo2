<?php

    echo "Digite o valor da primeira nota: \n";
    $nota1 = readline();
    echo "Digite o valor da segunda nota: \n";
    $nota2 = readline();

    $media = ($nota1 + $nota2)/2;

    if($media >= 6){
        echo "Você está aprovado! \n";
    }else{
        echo "Você está reprovado! \n";
    }

