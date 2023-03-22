<div class="titulo">Desafio For</div>

<!--
Usar o for
#
##
###
####
1)Pode usar incremento
2)Não pode usar incremento
-->

<?php

$array = ['#','##', '###', '####', '#####'];

for($i = 0; $i < count($array); $i++) {
    echo "$array[$i] <br>";
}

echo '<hr>';

for($i2 = '#';
    $i2 !== '######';
    $i2 .= '#') {
        echo "$i2 <br>";
    }

