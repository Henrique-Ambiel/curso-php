<?php

//Classe filme e seus atributos
class Filme {
    public string $nome;
    private int $anoLancamento;
    private string $genero;
    private array $notas = [];

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

    //Método Get acessa o atributo anoLancamento
    public function anoLancamento(): int{ 
        return $this->anoLancamento;
    }
}