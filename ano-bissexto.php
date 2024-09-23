<?php
echo "Digite o ano: ";
$ano = (int) fgets(STDIN); //Solicita o ano pelo teclado do usuário

//Verifica se o ano é bissexto a partir de 3 condições 
if($ano % 400 == 0 && $ano % 100 != 0 || $ano % 4 == 0){ 
    echo "$ano é bissexto";
} else {
    echo "$ano não é bissexto";
}