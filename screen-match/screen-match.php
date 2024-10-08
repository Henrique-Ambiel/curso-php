<?php //Inicia um código PHP

require __DIR__ . "/funcoes.php"; //Pega todo o conteúdo do código funcoes e cola aqui

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
$filme = [
    "Nome" => "Super Bad", 
    "Ano de lançamento" => 2007, 
    "Média de notas" => 7.5, 
    "Gênero" => "Comédia"
];

echo $filme["Ano"];

var_dump($notas); //Exibe os valores e suas informações do array
sort($notas); //Função que ordena o array
var_dump($notas);
$menorNota = min($notas); //Exibe o menor valor do array
var_dump($menorNota);

var_dump($filme['Nome']);
$posicao2Pontos = strpos($filme['Nome'], ':'); //Pega a posição de uma string no código
var_dump($posicao2Pontos);

var_dump(substr($filme['Nome'], 0, $posicao2Pontos)); //Recebe 3 parâmetros (o último opcional), uma string e dois int 

/*Converte uma string JSON em um dado PHP
var_dump(json_decode('{"Nome":"Super Bad","Ano de lan\u00e7amento":2007,"M\u00e9dia de notas":7.5,"G\u00eanero":"Com\u00e9dia"})', true));
echo json_encode($filme); Pega um valor em PHP e transforma em JSON (JavaScript Object Notation)*/

$filmeComoString = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeComoString);