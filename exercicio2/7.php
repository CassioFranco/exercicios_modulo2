<?php

    echo "digite sua idade para descobrir sua categoria: \n";
    $idade=readline();

    if($idade >=5 && $idade <= 7){
        echo "você pertence a categoria: INFANTIL A \n";
    }
    elseif($idade >=8 && $idade <= 10){
        echo "você pertence a categoria: INFANTIL B \n";
    }
    elseif($idade >=11 && $idade <= 13){
        echo "você pertence a categoria: JUVENIL A\n";
    }
    elseif($idade >=14 && $idade <= 17){
        echo "você pertence a categoria: JUVENIL B \n";
    }
    elseif($idade >=18){
        echo "você pertence a categoria: SÊNIOR \n";
    }