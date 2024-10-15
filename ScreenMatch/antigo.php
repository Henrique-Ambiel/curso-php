<?php //Inicia um código PHP

require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/funcoes.php"; //Pega todo o conteúdo do código funcoes e cola aqui

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
echo "Nome do filme: " . $nomeFilme . "\n";
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
$filme = criaFilme("Super Bad", 2007, 7.5, "Comédia");

echo $filme->$anoLancamento . "\n";

var_dump($notas); //Exibe os valores e suas informações do array
sort($notas); //Função que ordena o array
var_dump($notas);
$menorNota = min($notas); //Exibe o menor valor do array
var_dump($menorNota);

var_dump($filme->nome);
$posicao2Pontos = strpos($filme->nome, ':'); //Pega a posição de uma string no código
var_dump($posicao2Pontos);

var_dump(substr($filme->nome, 0, $posicao2Pontos)); //Recebe 3 parâmetros (o último opcional), uma string e dois int 

$filmeComoString = json_encode($filme); //Pega um valor em PHP e transforma em JSON (JavaScript Object Notation)
file_put_contents(__DIR__ . '/filme.json', $filmeComoString);