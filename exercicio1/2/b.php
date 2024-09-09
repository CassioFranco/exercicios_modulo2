<?php

    echo "digite os 4 valores em cada linha respectivamente:\n ";
    $a = readline();
    $b = readline();
    $c = readline();
    $d = readline();

    echo "digite os 4 pesos em cada linha respectivamente: \n";
    $e = readline();
    $f = readline();
    $g = readline();
    $h = readline();

    

    $sup = $a*$e + $b*$f + $c*$g + $d* $h;
    $inf= $e + $f + $g +$h ;
    $res= $sup/$inf;

    echo "A media ponderada é: $res \n";