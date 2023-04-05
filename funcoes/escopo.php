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

echo "Antes $variavel <br>";
trocarValor();
echo "Antes $variavel <br>";


function trocarValorDeVerdade() {
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "Antes $variavel <br>";
trocarValorDeVerdade();
echo "Antes $variavel <br>";

var_dump(trocarValorDeVerdade());