<?php
$saldo = 1000;

//Início do programa
echo "************************\n";
echo "Titular: Henrique Ambiel\n";
echo "************************\n";

//Executa o programa em loop enquanto a condição while for verdadeira
do {
    //Informações exibidas no início do programa
    echo "************************\n";
    echo "Titular: Henrique Ambiel\n";
    echo "************************\n";

    echo "1. Consultar saldo atual\n";
    echo "2. Sacar\n";
    echo "3. Depositar\n";
    echo "4. Sair\n";
    echo "Digite um número: ";

    $numero = (int) fgets(STDIN);

    //Condição para vários todos os casos do menu
    switch($numero){
        case 1: //Mostra o saldo atual da conta
            echo "Saldo atual: $saldo\n";
            break;
        case 2: //Recebe a quantidade que o usuário deseja sacar e verifica se é possível
            echo "Quanto deseja sacar ?: ";
            $valorSacar = (float) fgets(STDIN);
            if($valorSacar > $saldo){
                echo "Não foi possível sacar\n";
                } else {
            $saldo -= $valorSacar;
            }
            break;
        case 3: //Recebe a quantidade que o usuário deseja depositar
            echo "Quanto deseja depositar ?: ";
            $valorDepositar = (float) fgets(STDIN);
            $saldo += $valorDepositar;
            break;
        case 4: //Finaliza a sessão
            echo "Você finalizou sua sessão";
            break;
        default: //É exibido quando o número digitado for diferente de 1, 2, 3 e 4
            echo "Número inválido";
            break;
    }

} while ($numero != 4);
