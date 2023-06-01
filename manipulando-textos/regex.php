<?php

    $telefones = ['(44) 99852 - 4252', '(11) 98225 - 5421', '(58) 98858 - 4411'];

    foreach ($telefones as $telefone) {
        $regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';
        $telefoneValido = preg_match(
            $regex,
            $telefone,
            $correspondencia
        );

        if ($telefoneValido) {
            echo 'Telefone válido'. PHP_EOL;
        } else {
            echo 'Telefone inválido'. PHP_EOL;
        }

        echo preg_replace(
                $regex,
                '(XX) \2',
                $telefone
            ) . PHP_EOL;
}