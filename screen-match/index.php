<?php

require __DIR__ . "/src/Modelo/Genero.php"; //Pega todo o conteúdo do código de Genero e cola aqui
require __DIR__ ."/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Filme.php"; //Pega todo o conteúdo do código Modelo e cola aqui
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Calculos/calculadora.php";

echo "Bem vindo ao ScreenMatch\n"; //Exibe a string no terminal

$filme = new Filme(
    'Batman',
    2021,
    Genero::SuperHeroi,
    170,
); //Cria um novo filme

$filme->avalia(10);
$filme->avalia(8);
$filme->avalia(9);
$filme->avalia(9.5);

var_dump($filme); //Exibe informações em formato de array

echo $filme->media() . "\n";

$serie = new Serie(
    "Pinguim",
    2024,
    Genero::Drama,
    8,
    1,
    60,
);

$serie->avalia(9);

var_dump($serie);

echo $serie->media() . "\n";

$calculadora = new Calculadora();
$calculadora-> inclui($filme);
$calculadora-> inclui($serie);
$duracao = $calculadora->duracao();

echo "A maratona durará $duracao minutos";
