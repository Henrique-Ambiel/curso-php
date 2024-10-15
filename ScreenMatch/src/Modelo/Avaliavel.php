<?php 

namespace ScreenMatch\src\Modelo;

//Define o que uma classe "deve" implementar mas não "como"
interface Avaliavel{
    public function avalia(float $nota): void;
    public function media(): float;
}