<?php

$conta1 = [
    'Titular' => 'Matheus',
    'Saldo' => 1000
];

$conta2 = [
    'Titular' => 'Pedro',
    'Saldo' => 5000
];

$conta3 = [
    'Titular' => 'João',
    'Saldo' => 300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i ++){
    echo $contasCorrentes[$i]["Saldo"] .PHP_EOL;
}

