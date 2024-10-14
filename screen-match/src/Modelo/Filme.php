<?php

//Classe filme e seus atributos
class Filme extends Titulo{

    //Construtor define e acessa os atributos através das declarações deles e da propriedade readonly
    public function __construct(
        string $nome, 
        int $anoLancamento, 
        Genero $genero,
        public readonly int $duracaoMinutos
    ) 
    {
        parent::__construct($nome, $anoLancamento, $genero);
    }

    public function duracaoMinutos(): int
    {
        return $this->duracaoMinutos;
    }
}