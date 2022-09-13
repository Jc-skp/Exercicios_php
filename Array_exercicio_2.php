<?php
/*Crie um programa que apresente o maior, o menor e a média 
de todos os números presentes em um array de tamanho aleatório.*/

$numeros = [170,400,290,350,120,260,100,380];

$maior = max($numeros);
$menor = min($numeros);
$media = array_sum($numeros)/count($numeros);

echo "Maior valor: ".$maior."<br>"."Menor valor: ".$menor."<br>"."Média dos valores: ".$media;

?>