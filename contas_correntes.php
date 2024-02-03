<?php

$conta1 = [
    'titular' => 'Ana',
    'saldo' => 10000
];
$conta2 = [
    'titular' => 'Kaline',
    'saldo' => 20000
];
$conta3 = [
    'titular' => 'Maria',
    'saldo' => 3500
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
