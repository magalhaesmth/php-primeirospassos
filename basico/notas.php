<?php

$notas = [
    'Vinicius' => null,
    'João' => 8,
    'Matheus' => 10,
    'Maria' => 9,
];

krsort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo 'Sim, é um array' .PHP_EOL;
}

var_dump(array_is_list($notas));

echo "Maria fez a prova: " .PHP_EOL;
var_dump(isset($notas['Maria']));

echo "Alguém tirou 10?" .PHP_EOL;
var_dump(in_array(10, $notas, true));

echo "Quem tirou 10?" .PHP_EOL;
echo array_search(10, $notas);
