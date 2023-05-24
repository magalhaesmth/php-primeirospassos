<?php

echo "Olá, arquivo de funções aqui!" .PHP_EOL;

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL .'<br>';
}

function sacar($conta, $valorSacar)
{
    if ($valorSacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar esse valor!");
    } else {
        $conta['saldo'] -= $valorSacar;
    }
    return $conta;
}

function deposito ($conta, $valorDepositar){
    if ($valorDepositar > 0){
        $conta ['saldo'] += $valorDepositar;
    }else {
        exibeMensagem("Depositos inválidos!");
    }
    return $conta;
}

function titularLetrasMaisculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}