<?php

//Função que cálcula a temperatura Celsius em Fahrenheit
function temperaturaFahrenheit(float $temperaturaCelsius): float{
    return ($temperaturaCelsius * 1.8) + 32;
}