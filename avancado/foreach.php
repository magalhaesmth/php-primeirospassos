<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'Titular' => 'Matheus',
        'Saldo' => 1000
    ],
    '123.456.789-11' => [
        'Titular' => 'Pedro',
        'Saldo' => 5000
    ],
    '123.456.789-12' => [
        'Titular' => 'João',
        'Saldo' => 300
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf .PHP_EOL;
};


$carros = [
    'LMS-2232' => [
        'marca' => 'Chevrolet',
        'modelo' => 'Corsa'
    ],
    'KLM-1324' => [
        'marca' => 'Fiat',
        'modelo' => 'Fiorino'
    ],
    'OPN-5612' => [
        'marca' => 'VW',
        'modelo' => 'Saveiro'
    ],
];

foreach ($carros as $placa => $carro) {
    echo $placa .': ' .$carro['marca'] . ' ' .$carro['modelo'] .PHP_EOL;
}