<div class="titulo">Função & Escopo</div>

<?php

function imprimirMensagens() {
    echo "Olá! ";
    echo "Até a proxima!<br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

$variavel = 1;

function trocarValor() {
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocarValor();
echo "depois: $variavel <br>";


function trocaValorDeVerdade() {
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";


var_dump(trocaValorDeVerdade());