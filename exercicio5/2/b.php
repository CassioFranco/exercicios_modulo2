<?php

function parouimpar($num){
    if($num % 2 == 0){
        echo "true \n";
    }else {
        echo "false \n";
    }
}

echo "Digite o número para saber se é par-ou-ímpar: ";
$num = readline();

parouimpar($num);