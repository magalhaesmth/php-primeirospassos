<?php

$notas = [
    [
        'aluno' => 'Matheus',
        'nota'=> 10,
    ],
    [
        'aluno'=>'Vinicius',
        'nota'=> 6,
    ],
    [
        'aluno'=>'Aninha',
        'nota'=> 9,
]
];

function ordenaNotas(array $nota1, array $nota2): int
{
        return $nota1['nota'] <=> $nota2['nota'];
}

usort($notas, 'ordenaNotas');
var_dump($notas);
