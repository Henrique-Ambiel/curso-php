<?php

require __DIR__ . "/src/Modelo/Filme.php"; //Pega todo o conteúdo do código Modelo e cola aqui
require __DIR__ . "/src/funcoes.php"; //Pega todo o conteúdo do código funcoes e cola aqui

echo "Bem vindo ao ScreenMatch\n"; //Exibe a string no terminal

$filme = new Filme(); //Cria um novo filme
$filme->nome = 'Batman'; //Atribui os valores para o atributo de uma classe
$filme->anoLancamento = 2022;
$filme->genero = 'Super Herói';

$filme->avalia(10);
$filme->avalia(8);
$filme->avalia(9);
$filme->avalia(9.5);

var_dump($filme); //Exibe informações em formato de array

echo $filme->media();