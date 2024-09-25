<?php 

//Verifica através do looping todos os números entre 1 e 100
for($i = 1; $i <= 100; $i++){
    //Verifica se o número é ímpar (o resto da divisão por 2 é igual a 1) e exibe no terminal
    if ($i % 2 != 0){
        echo $i ."\n";
    }
}