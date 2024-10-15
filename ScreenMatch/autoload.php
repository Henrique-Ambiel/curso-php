<?php

//Registra uma função que será chamada automaticamente sempre que uma classe for utilizada pela primeira vez.
spl_autoload_register(function (string $className){
    var_dump($className);
    $caminho = str_replace('ScreenMatch', 'src', $className) . '.php';//str_replace substitui o valor de SrceenMatch por src 
    $caminho = str_replace('\\', DIRECTORY_SEPARATOR, $caminho); //Caso o arquivo seja aberto em Linux ou Mac evita de dar erro

    //DIRETCTORY_SEPARATOR é uma constante que separa diretórios em um caminho de arquivos.
    $caminhoCompleto =  __DIR__ . DIRECTORY_SEPARATOR . $caminho; 

    if(file_exists($caminhoCompleto)){ //Verifica se um arquivo ou diretório existe no sistema de arquivos
        require_once $caminhoCompleto; //Inclui e avalia um arquivo apenas uma vez durante a execução do script
    }

    exit();
});