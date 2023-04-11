<div class="titulo">Argumentos & Retornos</div>

<?php

function obterMensagem() {
    return 'Seja bem vindo(a)!';
}

obterMensagem();
$m = obterMensagem();
echo $m;
echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());


function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}!";
}

echo '<br>', obterMensagemComNome('Carleosmar');
echo '<br>', obterMensagemComNome('Carla');

function soma($a, $b) {
    return $a + $b;
}

$x = 5;
$y = 4;
echo '<br>', soma(45, 78);
echo '<br>', soma($x, $y);

function trocarValor($variavel, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
TrocarValor($variavel, 3);
echo '<br>', $variavel;

function trocarValorDeVerdade(&$a, $novoValor) {
    $a = $novoValor;
}

trocarValorDeVerdade($variavel, 5000);
echo '<br>', $variavel;
