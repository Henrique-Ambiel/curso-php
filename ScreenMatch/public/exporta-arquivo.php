<?php 

//Array associativo que recebe os valores HTML e os trata como PHP 
$filme = [
    'nome' => $_POST['nome'],
    'anoLancamento' => $_POST['ano'],
    'nota' => $_POST['nota'],
    'genero' => $_POST['genero'],
];

//Transforma o arquivo em JSON e passa em forma de parâmetro para o file_put_contents
file_put_contents('$filme.json',json_encode($filme));

//Envia um cabeçalho http e redireciona o usuário
header('Location: /sucesso.php?filme=' . $filme['nome']);