<?php

namespace ScreenMatch\src\Modelo;

use ScreenMatch\src\Exception\NotaInvalida;

//Armazena características que podem ser herdadas horizontamente por qualquer classe
trait ComAvaliacao
{
    
    private array $notas;

    public function avalia (float $nota): void //Recebe as notas 
    {
        if($nota < 0 || $nota > 10)
        {
            throw new NotaInvalida('Nota tem que ser entre 0 e 10'); //Lança uma mensagem de erro quando dispara a excecção
        }

        $this->notas[] = $nota; //Indica objeto utilizado para executar a função
    }

    public function media() : float //Cálcula a média de notas
    {
        $somaNotas = array_sum($this->notas); //Soma as notas do array
        $totalNotas = count($this->notas);
    
        return $somaNotas / $totalNotas;
    }
}