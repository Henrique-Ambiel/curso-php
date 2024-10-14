<?php

require __DIR__ . "/src/Modelo/Filme.php"; //Pega todo o conteúdo do código Modelo e cola aqui
require __DIR__ . "/src/Modelo/Genero.php"; //Pega todo o conteúdo do código de Genero e cola aqui

echo "Bem vindo ao ScreenMatch\n"; //Exibe a string no terminal

$filme = new Filme(
    'Batman',
    2021,
    Genero::SuperHeroi,
); //Cria um novo filme

$filme->avalia(10);
$filme->avalia(8);
$filme->avalia(9);
$filme->avalia(9.5);

var_dump($filme); //Exibe informações em formato de array

echo $filme->media() . "\n";