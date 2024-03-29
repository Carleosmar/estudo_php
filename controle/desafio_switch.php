<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">km > milha</option>
        <option value="milha-km">milha > km</option>
        <option value="metro-km">metro > km</option>
        <option value="km-metro">km > metro</option>
        <option value="cel-fah">celsius > fahrenheit</option>
        <option value="fah-cel">fahrenheit > celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

const FATOR_KM_MILHA = 0.621371;
CONST FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;

$param = $_POST['param'] ?? 0;

switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param km(s) = $distancia Milha(s)";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milha(s) = $distancia km(s)";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param metro(s) = $distancia km(s)";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param km(s) = $distancia Metro(s)";
        break;
    case 'cel-fah':
        $conversao = $param * FATOR_CEL_FAH + 32;
        $mensagem = "{$param}° Celsius = {$conversao}° Fahrenheit";
        break;
    case 'fah-cel':
        $conversao =  ($param - 32) / FATOR_CEL_FAH;
        $mensagem = "{$param}°Fahrenheit = {$conversao} celsius";
        break;
    default:
        $mensagem = "Nenhum valor calculado";
}

echo "<p>$mensagem</p>";