<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Matheus',
    'Maria',
    'Roberto',
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Renatinho',
    'Duda',
];

$alunos2023 = [...$alunos2021, ...$novosAlunos];
array_push($alunos2023, 'Alice', 'Bob', 'Jhon', 'Thiaguinho');
$alunos2023[] = 'Luiz';

array_unshift($alunos2023, 'Stephanie');

var_dump($alunos2023);

