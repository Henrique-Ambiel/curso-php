<?php

enum TipoConta{
    case ContaCorrente;
    case Investimento;
    case Poupanca;
    case Universitaria;

    public function temTaxa(): bool //Verifica o tipo de conta para saber se ela tem taxa ou não
    {
        return match($this)
        {
            TipoConta::ContaCorrente, TipoConta::Investimento=> true,
            TipoConta::Poupanca, TipoConta::Universitaria=> false,
        };
    }
}

class Conta{
    private float $saldo;

    public function __construct(public readonly string $nomeTitular, public readonly TipoConta $tipoConta)
    {
        $this->saldo = 0;
    }

    public function depositar(float $deposito): void
    {
        if($deposito > 0){
            $this->saldo += $deposito;
        }
    }

    public function sacar(float $sacar): void
    {
        if($sacar > 0 && $sacar < $this->saldo){
            $this->saldo -= $sacar;
        }
    }
}
