<?php

$dados = [
    'nome' => 'Matheus',
    'nota' => 10,
    'idade' => 24
];
['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

var_dump($nome, $nota, $idade);