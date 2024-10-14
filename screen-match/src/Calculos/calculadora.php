<?php

class Calculadora{
    
    private int $duracaoMaratona = 0;
    
    public function inclui($titulo): void
    {
        $this->duracaoMaratona += $titulo->duracaoMinutos();
    }

    public function duracao(): int
    {
        return $this->duracaoMaratona;
    }
}