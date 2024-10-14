<?php

//Classe filme e seus atributos
class Filme {
    public array $notas;

    //Construtor define e acessa os atributos através das declarações deles e da propriedade readonly
    public function __construct(public readonly string $nome, public readonly int $anoLancamento, public readonly Genero $genero) 
    {
        $this->notas = [];
    }

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

    /*Método Get acessa o atributo anoLancamento
    public function anoLancamento(): int
    { 
        return $this->anoLancamento;
    }

    Método Set define o atributo anoLancamento
    public function defineAnoLancamento(int $anoLancamento)
    {
        $this->anoLancamento = $anoLancamento;
    }*/
}