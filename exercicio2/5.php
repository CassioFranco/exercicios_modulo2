<?php

    echo "Digite o seu ano de nascimento: \n";
    $ano= readline();

    $idade= 2024 - $ano;

    echo "idade: $idade \n";

    if($idade >= 16){
        echo "Você pode votar! \n ";
        
        if($idade >= 18){
            echo "Você pode tirar a sua CNH! \n";
        }
    }else{
        echo "Você não pode votar e nem tirar a CNH! \n";
    }

