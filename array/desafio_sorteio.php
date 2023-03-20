<div class="titulo">Desafio Sorteio</div>

<?php

$nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];

//comando para sorteia um dos nomes
/*
$numNomes = sizeof($nomes);
$nomeSorteado[1] = $nomes[rand(0, $numNomes - 1)];

echo "<h1>$nomeSorteado[1]</h1>";*/

$index = array_rand($nomes);
echo "<h1><center>$nomes[$index]</center></h1>";