<div class="titulo">Constantes</div>

<?php

define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;

const NOVA_TAXA = 2.5;
echo '<br>'. NOVA_TAXA;

$valorVariavel = 2.8;
//define('NOVISSIMA_TAXA', $valorVariavel);
CONST NOVISSIMA_TAXA = 2.8 + 1.2;

echo '<br>' . NOVISSIMA_TAXA;

echo '<br>' . PHP_VERSION;
echo '<br>' . __line__;