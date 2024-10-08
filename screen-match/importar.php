<?php

$caminhoArquivo = __DIR__ . '/filme.json'; //Encontra o caminho do arquivo JSON
$conteudoArquivo = file_get_contents($caminhoArquivo); //Lê o conteúdo do arquivo e o retorna como uma string
$filme = json_decode($conteudoArquivo); //Converte uma string JSON em um dado PHP

var_dump($filme);