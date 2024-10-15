<?php

namespace ScreenMatch\src\Modelo;

//Armazena características que podem ser herdadas horizontamente por qualquer classe
trait ComAvaliacao{
    
    private array $notas;

    public function avalia (float $nota): void //Recebe as notas 
    {
        $this->notas[] = $nota; //Indica objeto utilizado para executar a função
    }

    public function media() : float //Cálcula a média de notas
    {
        $somaNotas = array_sum($this->notas); //Soma as notas do array
        $totalNotas = count($this->notas);
    
        return $somaNotas / $totalNotas;
    }
}