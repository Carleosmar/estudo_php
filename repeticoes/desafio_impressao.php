<div class="titulo">Desafio Impressão</div>

<!--
- Imprime apenas os valores do Array que tem o indice par
- Resolver com for e foreach
- Valores esperados são AAA, CCC, EEE
-->

<?php

$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];



print_r($array);

echo "<br><hr>";

for ($i = 0; $i < count($array); $i++) {
    if($i % 2 === 1) continue;
    if($i > count($array)) break;
    echo "$array[$i] <br>";
}

echo "<br><hr>";

foreach ($array as $i => $alfabeto) {
    if($i % 2 !== 0) continue;
    if($i > count($array)) break;
    echo "$alfabeto <br>";
}