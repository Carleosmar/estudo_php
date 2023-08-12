<div class="titulo">Ler Arquivo</div>

<?php
$arquivo = fopen('Teste.txt', 'r');
echo fread($arquivo, 10);
echo '<br>';
echo fread($arquivo, 10);
echo fclose($arquivo);

echo '<hr>';

$arquivo = fopen('Teste.txt', 'r');
$tamanho = filesize('teste.txt');
echo $tamanho, '<br>';
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('Teste.txt', 'r');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
var_dump(fgets($arquivo));
echo '<br>';
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('Teste.txt', 'r');
while(!feof($arquivo)){ // A função feof verifica o indicador de fim de arquivo.
    echo fgets($arquivo), '<br>';
}
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('Teste.txt', 'r');
while(!feof($arquivo)){
    echo fgetc($arquivo);
}
echo '<hr>';
fclose($arquivo);

$arquivo = fopen('Teste.txt', 'r+');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "\nAdicionando durante a leitura");
fclose($arquivo);

echo "Fim!";
