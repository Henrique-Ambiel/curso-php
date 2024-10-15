<?php

namespace ScreenMatch\src\Calculos;
use ScreenMatch\src\Modelo\Avaliavel;

class ConversorEstrelas{
    public function avaliar(Avaliavel $avaliavel): float
    {
        $nota = $avaliavel->media();
        return round($nota) / 2; //Arredonda o valor de nota
    }
}