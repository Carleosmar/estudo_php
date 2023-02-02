<div class="titulo">Tipo String</div>

<?php

echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// concatenação

echo "Nós tambem" . ' somos';
echo ("<br> Nós tambem" . ' somos');
echo '<br>', "Tambem aceito", " virgulas";
echo '<br>';
echo " 'Teste' " . '"Teste" '. '\'este\' ' . "\"Teste\" " . "\\";


print("<br> Tambem existe a função print");
print"<br> Tambem existe a função print";

// Funções da string

echo '<br>' . strtoupper('Maximizado');
echo '<br>' . strtolower('minimizado');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen('Eu também');
echo '<br>' . substr('Só uma parte mesmo', 7, 6); //parte
echo '<br>' . str_replace('isso', 'aquilo', 'troca isso isso');






