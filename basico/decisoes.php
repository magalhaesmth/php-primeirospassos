<?php

$idade = 16;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver 18 anos ou mais ou";
echo " a partir de 16 anos acompanhado". PHP_EOL;

if ($idade >= 18) {
    echo "Voce tem $idade anos, pode entrar sozinho" . PHP_EOL;
} elseif ($idade >= 16 && $numeroDePessoas > 1){
    echo "Você tem $idade anos, está acompanhado, então pode entrar";
}

