<div class="titulo">Valor vs referencia</div>


<?php

$variavel =  'valor inicial';
echo $variavel;

//Atribuição por valor

$variavelValor =  $variavel;
echo "<br> $variavelValor";
$variavelValor = 'novo valor';
echo "<br> $variavel";
echo " $variavelValor";

//Atribuição por referencia
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referncia';
echo "<br>$variavel $variavelReferencia";
