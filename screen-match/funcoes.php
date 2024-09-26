<?php

//Função de exibir a mensagem de lançamento do ano
function exibirMensagemLancamento(int $ano): void {
    //Condicional que mostra se o filme é de 2022 ou não
    if ($ano > 2022){
        echo "Esse filme é um lançamento\n";
    } else if($ano > 2020 && $ano <= 2022){
        echo "Filme foi lançado recentemente\n";
    }else {
        echo "Esse filme não é um lançamento\n";
    }
}

//Função de incluir os filmes no plano do usuário 
function incluidoPlano(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento > 2020;
}
