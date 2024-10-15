<?php

namespace ScreenMatch\src\Modelo;

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

    #[\Override] //Atributo usado para indicar que um método em uma classe filha está sobrescrevendo um método de uma classe pai
    public function duracaoMinutos(): int
    {
        return $this->duracaoMinutos;
    }
}