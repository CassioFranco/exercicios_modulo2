<?php

    function multiplo($num){
        if($num % 4 == 0){
            echo "$num é multiplo de 4! \n";
        }else {
            echo "$num não é multiplo de 4! \n";
        }
    }

    echo "Digite o número para saber se é multiplo de 4: ";
    $num = readline();
    
    multiplo($num);