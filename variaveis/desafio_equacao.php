<div class="titulo">Desafio Equação</div>

<?php

$expressaoA = (6 * (3 + 2)) ** 2 / (3 * 2);
$expressaoB = ((1 - 5) * (2 - 7) / 2) ** 2;
$resultado = (($expressaoA - $expressaoB) **3) / (10 ** 3);


echo $expressaoA, '<br>';
echo $expressaoB, '<br>';
echo 'O resultado final é ' . $resultado, '<br>';

