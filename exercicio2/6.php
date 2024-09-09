<?php

    echo "digite dois valores diferentes: \n";
    $num1=readline();
    echo "digite dois valores diferentes: \n";
    $num2=readline();
    
    if ($num1 === $num2){
        echo "Reinicie o sistema e digite dois numeros que não sejam iguais! \n";

    }elseif($num1 > $num2){
        echo "$num1 é maior que $num2! \n";
    }
    elseif($num1 < $num2){
        echo "$num1 é menor que $num2! \n";
    }