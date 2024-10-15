<?php

namespace ScreenMatch\src\Calculos;

use DivisionByZeroError;
use ScreenMatch\src\Modelo\Avaliavel;

class ConversorEstrelas{
    public function avaliar(Avaliavel $avaliavel): float
    {
        //Verifica se tem um erro e retorna 0 caso sim
        try{
            $nota = $avaliavel->media();
            return round($nota) / 2; //Arredonda o valor de nota
        } catch(DivisionByZeroError){
            //echo $erro->getMessage(); Exibe no terminal o tipo de erro
            return 0;
        }
    }
}