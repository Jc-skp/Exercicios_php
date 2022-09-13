<?php
/*Crie um programa em PHP, que calcule a soma de todos os números presentes 
em um array de tamanho aleatório e apresente na tela.*/

$numeros = [35,90,70,22,45,60,480,120,360];//total = 1282

$soma = array_sum($numeros);

echo "Soma: ".$soma;
?>