<?php

    echo "digite um numero: \n";
    $num = readline();

    if($num >=30 && $num <= 90){

        echo "$num está entre 30 e 90 \n";
    }

    elseif($num >=120){
        echo "$num é maior ou igual que 120 \n";
    }

    else{
        echo "$num não se encaixa nas condições \n";
    }