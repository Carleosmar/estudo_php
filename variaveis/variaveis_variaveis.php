<div class="titulo">variaveis variavéis</div>

<?php

$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a} ${$a} ${$a} $valor";

echo '<br>';
$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!';
echo "$epa {$$epa} {$$$epa}";