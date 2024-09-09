<?php

    function soma(){
        global $num1;
        global $num2;

        $soma= $num1 + $num2;
        echo "$num1 + $num2 = $soma \n";

    }

    function subtracao(){
        global $num1;
        global $num2;

        $subtracao= $num1 - $num2;
        echo "$num1 - $num2 = $subtracao \n";

    }

    function multiplicacao(){
        global $num1;
        global $num2;

        $multiplicacao= $num1 * $num2;
        echo "$num1 * $num2 = $multiplicacao \n";

    }

    function divisao(){
        global $num1;
        global $num2;

        if($num1 == 0 || $num2 == 0){
            echo "Não existe divisão por 0!!\nReinicie o sistema e tente novamente... \n";
        }else{
            $divisao= $num1 / $num2;
        echo "$num1 / $num2 = $divisao \n";
        }
    }

    echo "Digite o primeiro valor para o calculo: ";
    $num1 = readline();
    echo "Digite o segundo valor para o calculo: ";
    $num2 = readline();

    soma();
    subtracao();
    multiplicacao();
    divisao();