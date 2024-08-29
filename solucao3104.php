<?php

function entradaA() {
   
    return trim(fgets(STDIN)); 
}

function entradaB() {
   
    return (int)trim(fgets(STDIN));
}

function buscarResto(string $A, int $B) {
    $resto = 0;

    // Itera sobre $A , que é meu objeto de estudo
    for ($i = 0, $len = strlen($A); $i < $len; $i++) 
    {
        $resto = ($resto * 10 + (int)$A[$i]) % $B;
    }

    return $resto;
}


$a = entradaA();
$b = entradaB();

$resultado = buscarResto($a, $b);

echo $resultado . PHP_EOL;
?>