<?php

    echo "quantas maçãs você deseja comprar? \n";
    $macas= readline();

    if( $macas >= 12){
        $valor= $macas * 1;
        echo "o valor total é: $valor \n";
    }
    else{
        $valort = $macas * 1.30;
        echo "o valor total é: $valort \n";
    }