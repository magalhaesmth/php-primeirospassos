<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Matheus' => 10,
    'Maria' => 9,
    'Roberto' => 7,
];

$notasBimestre2 = [
    'Vinicius' => 7,
    'João' => 10,
    'Matheus' => 8,
];

$alunosFaltantes = array_diff_key($notasBimestre1,$notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($nomesAlunos, $notasAlunos));