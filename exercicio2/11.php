<?php  

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

    echo "quem foi o primeiro vencedor do dois-ou-um? \n";
    echo "1.pedrinho \n";
    echo "2.zezinho \n";
    echo "3.joãozinho \n";
    $menu= readline();
    limparTerminal();

    echo "quem foi o segundo vencedor do dois-ou-um? \n";
    echo "1.pedrinho \n";
    echo "2.zezinho \n";
    echo "3.joãozinho \n";
    $menu2= readline();
    limparTerminal();

    if($menu == 1 && $menu2 == 2){
        limparTerminal();
        echo "pedrinho e zezinho venceram a primeira rodada! \n";
        echo "quem venceu o par-ou-ímpar? \n";
        echo "1.pedrinho \n";
        echo "2.zezinho \n";
        $vencedor = readline();
        if($vencedor == 1){
            limparTerminal();
            echo "Pedrinho é o grande vencedor!!! \n";
        }
        elseif($vencedor == 2){
            limparTerminal();
            echo "Zezinho é o grande vencedor!!! \n";
        }
        else{
            limparTerminal();
            echo "esse participante não existe, reinicie o sistema e tente novamente! \n";
        }

    }

    elseif($menu == 1 && $menu2 == 3){
        limparTerminal();
        echo "pedrinho e joãozinho venceram a primeira rodada! \n";
        echo "quem venceu o par-ou-ímpar? \n";
        echo "1.pedrinho \n";
        echo "2.joãozinho \n";
        $vencedor = readline();
        if($vencedor == 1){
            limparTerminal();
            echo "Pedrinho é o grande vencedor!!! \n";
        }
        elseif($vencedor == 2){
            limparTerminal();
            echo "joãozinho é o grande vencedor!!! \n";
        }
        else{
            limparTerminal();
            echo "esse participante não existe, reinicie o sistema e tente novamente! \n";
        }

    }

    elseif($menu == 2 && $menu2 == 1){
        limparTerminal();
        echo "zezinho e pedrinho venceram a primeira rodada! \n";
        echo "quem venceu o par-ou-ímpar? \n";
        echo "1.zezinho \n";
        echo "2.pedrinho \n";
        $vencedor = readline();
        if($vencedor == 1){
            limparTerminal();
            echo "zezinho é o grande vencedor!!! \n";
        }
        elseif($vencedor == 2){
            limparTerminal();
            echo "pedrinho é o grande vencedor!!! \n";
        }
        else{
            limparTerminal();
            echo "esse participante não existe, reinicie o sistema e tente novamente! \n";
        }
    }

    elseif($menu == 2 && $menu2 == 3){
        limparTerminal();
        echo "zezinho e joãozinho venceram a primeira rodada! \n";
        echo "quem venceu o par-ou-ímpar? \n";
        echo "1.zezinho \n";
        echo "2.joãozinho \n";
        $vencedor = readline();
        if($vencedor == 1){
            limparTerminal();
            echo "zezinho é o grande vencedor!!! \n";
        }
        elseif($vencedor == 2){
            limparTerminal();
            echo "joãozinho é o grande vencedor!!! \n";
        }
        else{
            limparTerminal();
            echo "esse participante não existe, reinicie o sistema e tente novamente! \n";
        }

    }

    elseif($menu == 3 && $menu2 == 1){
        limparTerminal();
        echo "joãozinho e pedrinho venceram a primeira rodada! \n";
        echo "quem venceu o par-ou-ímpar? \n";
        echo "1.joãozinho \n";
        echo "2.pedrinho \n";
        $vencedor = readline();
        if($vencedor == 1){
            limparTerminal();
            echo "joãozinho é o grande vencedor!!! \n";
        }
        elseif($vencedor == 2){
            limparTerminal();
            echo "pedrinho é o grande vencedor!!! \n";
        }
        else{
            limparTerminal();
            echo "esse participante não existe, reinicie o sistema e tente novamente! \n";
        }

    }

    elseif($menu == 3 && $menu2 == 2){
        limparTerminal();
        echo "joãozinho e zezinho venceram a primeira rodada! \n";
        echo "quem venceu o par-ou-ímpar? \n";
        echo "1.joãozinho \n";
        echo "2.zezinho \n";
        $vencedor = readline();
        if($vencedor == 1){
            limparTerminal();
            echo "joãozinho é o grande vencedor!!! \n";
        }
        elseif($vencedor == 2){
            limparTerminal();
            echo "zezinho é o grande vencedor!!! \n";
        }
        else{
            limparTerminal();
            echo "esse participante não existe, reinicie o sistema e tente novamente! \n";
        }

    }

    else{
        limparTerminal();
        echo "esse participante não existe, reinicie o sistema e tente novamente! \n";
    }


