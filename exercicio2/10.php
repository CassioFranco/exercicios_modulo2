<?php

    echo "digite o valor do produto: \n";
    $num=readline();

    if ($num < 20){
        $quatrocinco = $num *0.45;
        $valor= $num + $quatrocinco;
        echo "$num reais com 45% de margem de lucro fica: $valor \n";
    }
    else {
        $trinta= $num * 0.30;
        $valor= $num + $trinta;
        echo "$num reais com 30% de margem de lucro fica: $valor \n";
    }