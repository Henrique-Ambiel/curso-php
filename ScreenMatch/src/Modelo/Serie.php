<?php 

namespace ScreenMatch\src\Modelo;

class Serie extends Titulo{

    //Construtor define e acessa os atributos através das declarações deles e da propriedade readonly
    public function __construct(
        string $nome, 
        int $anoLancamento, 
        Genero $genero,
        public readonly int $episodiosTemporadas, 
        public readonly int $temporadas, 
        public readonly int $minutosEpisodio
    ) 
    {
        parent::__construct($nome, $anoLancamento, $genero);
    }

    public function duracaoMinutos(): int
    {
        return $this->temporadas * $this->episodiosTemporadas * $this->minutosEpisodio;
    }
}