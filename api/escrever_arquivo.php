<div class="titulo">Escrever Arquivo</div>

<?php

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "valor inicial\n");
$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo Contéudo");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, " Com novos valores\n");
fwrite($arquivo, " Adicionandos em segundo momento");

ini_set('display_erros', 1);
$arquivo = fopen('teste.txt', 'x');