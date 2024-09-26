<?php
$saldo = 1000;

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

    $numero = (int) fgets(STDIN); //Lê dados do teclado do usuário

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
        case 3: //Recebe a quantidade que o usuário deseja depositar e verifica se o número depositado é negativo
            echo "Quanto deseja depositar ?: ";
            $valorDepositar = (float) fgets(STDIN);
            if($valorDepositar < 0){
                echo "Não é possível depositar esse valor\n";
            } else {
                $saldo += $valorDepositar;
            }
            break;
        case 4: //Finaliza a sessão
            echo "Você finalizou sua sessão";
            break;
        default: //É exibido quando o número digitado for diferente de 1, 2, 3 e 4
            echo "Número inválido";
            break;
    }

} while ($numero != 4);
