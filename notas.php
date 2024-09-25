<?php

//Array de notas
$notas = [10, 8.8, 9, 6, 7, 8];

//Percorre o array e avalia se o aluno passou ou não em suas notas
foreach ($notas as $nota){
    $resultado = $nota > 6 ? "Aprovado" : "Reprovado";

    echo "O aluno foi $resultado com a nota $nota\n";
}