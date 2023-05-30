<div class="titulo">Preparação entrevista</div>

<?php

$numeroA = 5;
$numeroB = 6;

if($numeroA > $numeroB) {
    echo $numeroA;
} else {
    echo $numeroB;
}

echo "<br>";

for ($i = 4; $i > 0; $i--) {
    echo " A sequencia é $i <br>";
}

function soma($a, $b) {
    return $a + $b;
}


echo soma(3, 5);

echo "<hr>";

$num1 = 8;

if ($num1 % 2 == 0) {
    echo "Esse numero é par";
} else {
    echo "Esse número é Impar";
}
echo "<hr>";

$num2 = 0;

while($num2 <= 4) {
    echo "A sequencia é $num2 <br>";
    $num2++;
}




