<?php //Inicia um código PHP

//Exibe a string no terminal
echo "Bem vindo(a) ao\tScreen Match!\n";

//Declaração de variáveis 
$nomeFilme = "Top Gun - Maverick\n";
$anoLancamento = $argv[1] ?? 2022; //Se argv = null, 2022 será exibido no terminal
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

// "." concatena os textos
echo "Nome do filme: " . $nomeFilme;
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento";

//Condicional que mostra se o filme é de 2022 ou não
if ($anoLancamento > 2022){
    echo "Esse filme é um lançamento";
} else if($anoLancamento > 2020 && $anoLancamento <= 2022){
    echo "Filme foi lançado recentemente";
}else {
    echo "Esse filme não é um lançamento";
}