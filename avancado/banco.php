<?php
include 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Matheus',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'João',
        'saldo' => 300
    ],
    '123.456.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500);

$contasCorrentes['123.456.789-11'] = sacar(
    $contasCorrentes['123.456.789-11'],
    500);

$contasCorrentes['123.456.789-12'] = deposito(
  $contasCorrentes['123.456.789-12'],
  900);

unset ($contasCorrentes['123.456.789-11']);

titularLetrasMaisculas($contasCorrentes['123.456.789-10']);

foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}
