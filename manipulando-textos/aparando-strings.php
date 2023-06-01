<?php

    $csv = ', Matheus Magalhães, 21,';
    echo trim($csv, '.,') .PHP_EOL; //Remove as o que voce passar como parametro.
    echo ltrim($csv, '.,') .PHP_EOL;
    echo rtrim($csv, '.,') .PHP_EOL;


