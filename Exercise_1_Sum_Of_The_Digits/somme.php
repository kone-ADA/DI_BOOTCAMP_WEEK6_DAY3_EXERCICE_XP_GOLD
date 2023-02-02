<?php

$nombre = $_POST['nombre'];


function sum($nombre)
{
    $sum = 0;
    for ($i = 0; $i < strlen($nombre); $i++) {
        $sum += $nombre[$i];
    }
    return $sum;
}

print_r("la somme est: ");
echo sum($nombre);