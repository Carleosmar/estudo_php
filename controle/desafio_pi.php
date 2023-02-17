<div class="titulo">Desafio PI</div>

<?php
echo pi();
$pi = 3.14;

if($pi == pi()) {
    echo "<br>Iguais!";
} else {
    echo "<br>Diferentes!";
}

if($pi -pi() <= 0.01) {
    echo "<br>Praticamente iguais";
}



// Operador Relacional

$piErrado = 2.8;

