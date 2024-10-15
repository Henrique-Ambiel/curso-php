<?php

use ScreenMatch\src\Calculos\ConversorEstrelas;
use ScreenMatch\src\Exception\NotaInvalida;
use ScreenMatch\src\Modelo\Episodio;
use ScreenMatch\src\Modelo\Genero;
use ScreenMatch\src\Modelo\Serie;

require 'autoload.php';

try{
$serie = new Serie('The Lats of Us', 2023, Genero::Drama, 8, 2, 70);
$episodio = new Episodio($serie, 'Piloto', 1);
$episodio->avalia(9.5);

$conversor = new ConversorEstrelas();
echo $conversor->avaliar($episodio);
} catch(NotaInvalida $e) //Qualquer excessão 
{ 
    echo "Um problema aconteceu" . $e->getMessage();
}