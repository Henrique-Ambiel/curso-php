<?php

$hora = 10;

//Verifica a partir da hora, se é dia, tarde ou noite
if($hora >= 6 && $hora <= 11){
    echo "Bom dia!";
} else if ($hora >= 12 && $hora <= 18){
    echo "Boa tarde!";
} else if ($hora >= 19 && $hora <= 23){
    echo "Boa noite!";
} else {
    echo "Hora inválida";
}