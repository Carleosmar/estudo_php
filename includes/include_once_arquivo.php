<?php
echo 'carregando: include_once_arquivo<br>';

$variavel = 'Estou definida';


if(!function_exists('soma')){
    function soma($a, $b) {
        return $a + $b;
    }
}


