<?php

    $nome = "Matheus Magalhães";
    $email = "matheus@alura.com.br";
    $senha = "123";

    if (strlen($senha) < 8){
        echo "Senha fraca!" .PHP_EOL;
    }

    $posicaoDoArroba = strpos($email, "@");

    $usuario = substr($email, 0, $posicaoDoArroba);

    echo strtoupper($usuario) .PHP_EOL;
    echo substr($email, $posicaoDoArroba) .PHP_EOL;


    list($nome, $sobrenome) = explode(' ', $nome);

    echo 'Nome: ' .$nome .PHP_EOL;
    echo 'Sobrenome: ' .$sobrenome .PHP_EOL;

    $csv = 'Matheus Magalhães, 21, matheus@alura.com.br';
    var_dump(explode(',', $csv));

    echo trim($email) .PHP_EOL;