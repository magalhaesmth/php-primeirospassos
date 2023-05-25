<?php

require_once 'Conta.php';
require_once 'Titular.php';

$primeiraConta = new Conta(new Titular('123.456.789-10', 'Matheus Urbano'));
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() .PHP_EOL;
echo $primeiraConta->recuperaSaldo() .PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() .PHP_EOL;

$segundaConta = new Conta(new Titular('987-654-321-00', 'Patricia'));
var_dump($segundaConta);

echo Conta::recuperaNumeroDeContas();