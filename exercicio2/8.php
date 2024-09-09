<?php

    echo "1. À vista em dinheiro com 10% de desconto. \n";
    echo "2. À vista no cartão com 5% de desconto. \n";
    echo "3. Em 2 vezes, preço normal da etiqueta. \n";
    echo "4. Em 3 vezes, preço normal da etiqueta com juros de 10%. \n";
    $menu = readline();

    function limparTerminal() {
        // Detecta o sistema operacional
        $os = PHP_OS_FAMILY;
    
        // Executa o comando apropriado para limpar o terminal
        if ($os === 'Windows') {
            system('cls');
        } else {
            system('clear');
        }
    }


    if ($menu == 1){
        limparTerminal();
        echo "digite o valor do produto: \n";
        $valor=readline();
        
        $desconto= $valor * 0.1;
        $valorfinal= $valor - $desconto;
        
        echo "O valor final é: $valorfinal \n ";

    }

    elseif ($menu == 2){
        echo "digite o valor do produto: \n";
        $valor=readline();
        
        $desconto= $valor * 0.05;
        $valorfinal= $valor - $desconto;
        
        echo "O valor final é: $valorfinal \n ";

    }

    elseif ($menu == 3){
        echo "digite o valor do produto: \n";
        $valor=readline();
        
        $parcela= $valor / 2;
        
        
        echo "O valor $valor parcelado em 2 vezes é: $parcela \n ";

    }

    elseif ($menu == 4){
        echo "digite o valor do produto: \n";
        $valor=readline();
        
        $juros= $valor * 0.1;
        $valorfinal= $valor + $juros;
        $parcelas= $valorfinal / 3;



        echo "O valor $valor com juros de 10%: $valorfinal parcelado em 3 vezes é: $parcelas \n ";

    }