<?php
//Variáveis
$altura = 1.73;
$peso = 53;
$imc = $peso / $altura ** 2; //Cálculo do IMC ("**" = potenciação)

//Após o cálculo do IMC, exibe o resultado no terminal
if($imc <= 16.9){
    echo "$imc: Muito abaixo do peso";
} else if($imc >= 17 && $imc <= 18.4){
            echo "$imc: Abaixo do peso";
        } else if($imc >= 18.5 && $imc <= 24.9){
            echo "$imc: Peso normal";
        } else if($imc >= 25 && $imc <= 29.9){
            echo "$imc: Acima do peso";
        } else {
            echo "$imc: Obesidade";
        }
        