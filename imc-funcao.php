<?php

//Função que recebe dois valores float e retorna o cálculo do IMC
function imc(float $altura, float $peso): float{
    $altura = 1.73;
    $peso = 57;

    return $altura / $peso**2;
}