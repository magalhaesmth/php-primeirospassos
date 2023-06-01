<?php

$nome = "Matheus Magalhães";

$ehMinhaFamilia = str_contains($nome, "Magalhães");

if ($ehMinhaFamilia){
    echo "$nome é da minha familia" .PHP_EOL;
} else {
    echo "$nome não é da minha familia" .PHP_EOL;
}