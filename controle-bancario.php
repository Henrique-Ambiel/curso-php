<?php
$numero = (float) fgets(STDIN);
$saldo = 1000;

//Informações exibidas no início do programa
echo "************************\n";
echo "Titular: Henrique Ambiel\n";
echo "************************\n";
echo "1. Consultar saldo atual\n";
echo "2. Sacar\n";
echo "3. Depositar\n";
echo "4. Sair\n";
echo "Digite um número: ";

switch($numero){
    case 1:
        echo "Saldo atual: $saldo\n";
        break;
    case 2: 
        echo "Quanto deseja sacar ?: ";
        break;
    case 3: 
        break;
    case 4:
        break;
    case 5:
        break;
    default: 
        break;
}
