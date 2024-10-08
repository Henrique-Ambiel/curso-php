<?php

$caminhoArquivo = __DIR__ . '/filme.json'; //Encontra o caminho do arquivo JSON
file_get_contents($caminhoArquivo); //Lê o conteúdo do arquivo e o retorna como uma string
