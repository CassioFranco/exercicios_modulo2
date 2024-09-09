<?php
    echo "Digite o dividendo e o divisor separados por linha: \n";
    $a = readline();
    $b = readline();

    $quo = $a / $b;
    $res = $a % $b;

    echo "O quociente é: $quo \nO Resto é: $res \n";