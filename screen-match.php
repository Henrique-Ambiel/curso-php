<?php //Inicia um código PHP

//Função de exibir a mensagem de lançamento do ano
function exibirMensagemLancamento(int $ano): void {
    //Condicional que mostra se o filme é de 2022 ou não
    if ($ano > 2022){
        echo "Esse filme é um lançamento\n";
    } else if($ano > 2020 && $ano <= 2022){
        echo "Filme foi lançado recentemente\n";
    }else {
        echo "Esse filme não é um lançamento\n";
    }
}

//Função de incluir os filmes no plano do usuário 
function incluidoPlano(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento > 2020;
}

//Exibe a string no terminal
echo "Bem vindo(a) ao\tScreen Match!\n";

//Declaração de variáveis 
$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "A hora do pesadelo";
$nomeFilme = "Super Bad";
$anoLancamento = 2022;
$notas = [];
$quantidadeNotas = $argc - 1; //$argc é o número de argumentos passados do script

//Looping estruturado em inicialização, condição e incremeneto
for($contador = 1; $contador < $argc; $contador++){
    $notas[]= (float) $argv[$contador]; //$argv é um array com todos os argumentos passados do script
}

$notaFilme = array_sum($notas) / $quantidadeNotas;
$planoPrime = true;

//Operador lógico booleano
$incluidoPlano = incluidoPlano($planoPrime, $anoLancamento);

// "." concatena os textos
echo "Nome do filme: " . $nomeFilme. "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

//Chama a função exibirMensagemLancamento
exibirMensagemLancamento($anoLancamento);

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
var_dump($notas);
sort($notas); //Função que ordena o array
var_dump($notas);
$menorNota = min($notas); //Exibe o menor valor do array
echo $menorNota;