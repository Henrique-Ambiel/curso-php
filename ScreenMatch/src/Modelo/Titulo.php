<?php

namespace ScreenMatch\src\Modelo; //Espaço em que define e agrupa códigos de maneira lógica, como uma pasta


//Classe filme e seus atributos (ela implementa os métodos da interface Avaliavel)
abstract class Titulo implements Avaliavel{
   
    use ComAvaliacao; //Herda as características da trait ComAvaliacao
    
    //Construtor define e acessa os atributos através das declarações deles e da propriedade readonly
    public function __construct(
        public readonly string $nome, 
        public readonly int $anoLancamento, 
        public readonly Genero $genero
    ) 
    {
    }

    abstract public function duracaoMinutos(): int;

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