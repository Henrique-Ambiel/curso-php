<?php //Inicia um código PHP

//Exibe a string no terminal
echo "Bem vindo(a) ao\tScreen Match!\n";

//Declaração de variáveis 
$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "A hora do pesadelo";
$nomeFilme = "Super Bad";
$anoLancamento = 2022;
$notas = [];
$quantidadeNotas = $argc - 1; //$argc é o número de argumentos passados do script

//$anoLancamento = $argv[1] ?? 2022; //Se $argv = null, 2022 será exibido no terminal

/*Operadores matemáticos
$somaNotas = 9;
$somaNotas += 8;
$somaNotas +=7.5;
$somaNotas +=6;
$somaNotas +=5;*/

//Looping estruturado em inicialização, condição e incremeneto
for($contador = 1; $contador < $argc; $contador++){
    $notas[]= (float) $argv[$contador]; //$argv é um array com todos os argumentos passados do script
}

/*$somaNotas = 0;
//percorre arrays e listas para iterar sobre os elementos deles
foreach($notas as $nota) {
    $somaNotas +=$notas;
} */

$notaFilme = array_sum($notas) / $quantidadeNotas;
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

echo "Gênero: $genero\n";

//var_dump($argv); //Exibe no terminal os valores e o tipo da variável

//Array que guarda infomações sobre o filme
$filme = [
    "Nome" => "Super Bad", 
    "Ano de lançamento" => 2007, 
    "Média de notas" => 7.5, 
    "Gênero" => "Comédia"
];

echo $filme["Nome"];