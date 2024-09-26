<?php

//Função que recebe dois números inteiros e uma string operação e retorna o seu resultado
function operacaoMatematica(int $numero, int $numero2, string $operacao): float {
    return match($operacao){
        "Soma" => $numero + $numero2,
        "Subtração" => $numero - $numero2,
        "Divisão" => $numero / $numero2,
        "Mutiplicação" => $numero * $numero2,
    };
}