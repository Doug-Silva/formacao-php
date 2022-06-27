<?php

$altura = 1.75;
$peso = 140;

$imc = $peso / ($altura ** 2);

if ($imc < 18.5) {
    echo "Seu IMC é: " . number_format($imc, 2, ',', '.') . " Você está abaixo do peso.";
} else if ($imc >= 18.5 && $imc <= 24.9) {
    echo "Seu IMC é: " . number_format($imc, 2, ',', '.') . " Peso ideal.";
} else if ($imc >= 30 && $imc <= 34.9) {
    echo "Seu IMC é: " . number_format($imc, 2, ',', '.') . " Obesidade grau 1.";
} else if ($imc >= 35 && $imc <= 39.9) {
    echo "Seu IMC é: " . number_format($imc, 2, ',', '.') . " Obesidade grau 2.";
} else if ($imc >= 40) {
    echo "Seu IMC é: " . number_format($imc, 2, ',', '.') . " Obesidade grau 3.";
}