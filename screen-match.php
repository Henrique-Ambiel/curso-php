<?php //Inicia um código PHP

//Exibe a string no terminal
echo "Bem vindo(a) ao\tScreen Match!\n";

//Declaração de variáveis 
$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "A hora do pesadelo";
$nomeFilme = "Super Bad";
$anoLancamento = 2022;
$somaNotas = 0;
$quantidadeNotas = $argc - 1;

//$anoLancamento = $argv[1] ?? 2022; //Se argv = null, 2022 será exibido no terminal

/*Operadores matemáticos
$somaNotas = 9;
$somaNotas += 8;
$somaNotas +=7.5;
$somaNotas +=6;
$somaNotas +=5;*/

for($contador = 1; $contador < $argc; $contador += 1){
    $somaNotas += $argv[$contador];
}

$notaFilme = $somaNotas / $quantidadeNotas;
$planoPrime = true;

//Operador lógico booleano
$incluidoPlano = $planoPrime || $anoLancamento > 2020;

// "." concatena os textos
echo "Nome do filme: " . $nomeFilme. "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

//Condicional que mostra se o filme é de 2022 ou não
if ($anoLancamento > 2022){
    echo "Esse filme é um lançamento\n";
} else if($anoLancamento > 2020 && $anoLancamento <= 2022){
    echo "Filme foi lançado recentemente\n";
}else {
    echo "Esse filme não é um lançamento\n";
}

//Condicional match que indica o gênero de acordo com o filme
$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "Ação",
    "A hora do pesadelo" => "Terror",
    "Super Bad" => "Comédia",
    default => "Gênero desconhecido"
};

echo "Gênero: $genero";

echo $argc;