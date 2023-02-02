<div class="titulo">Desafio String</div>

<?php

//Qual o metodo que a posição do texto retorna a string 'abc'
//da string '!AbcaBcabc' retorne 1?


echo strpos('!AbcaBcabc', 'abc'). '<br>';
echo stripos('!AbcaBcabc', 'abc'). '<br>';

echo strpos(strtolower('!AbcaBcabc'), 'abc'). '<br>';