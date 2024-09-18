<?php //Inicia um código PHP

//Exibe a string no terminal
echo "Bem vindo(a) ao Screen Match!\n";

//Declaração de variáveis 
$nomeFilme = "Top Gun - Maverick\n";
$anoLancamento = 2022;
$somaNotas = 9;

//Operadores matemáticos
$somaNotas += 8;
$somaNotas +=7.5;
$somaNotas +=6;
$somaNotas +=5;

$notaFilme = $somaNotas / 5;
$planoPrime = true;

//Operador lógico booleano
$incluidoPlano = $planoPrime || $anoLancamento > 2020;

echo $notaFilme;