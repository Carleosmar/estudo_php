<div class="titulo">Desafio Operadores Lógicos</div>

<!--
    Dois trabalhos -> Terça e Quinta
    - Se os dois forem executados -> Tv 50' e Sorvete
    - Se apenas um for executado -> TV 32' e sorvete
    - Se nenhum for executado -> Fica em casa mais saudavel
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php

if(isset($_POST['t1']) && isset($_POST['t2'])) {
    $t1 = !!$_POST['t1'];
    $t2 = !!$_POST['t2'];

    if($t1 && $t2){
        echo 'No final de semana compraremos a TV de 50 polegadas e tomaremos sorvete';
    }elseif($t1 xor $t2) {
        echo 'No final de semana compraremos a TV de 32 polegadas e tomaremos sorvete';
    }elseif($t1 == 0 && $t2 == 0) {
        echo 'Vamos fica em casa e fica mais saudavél';
    }
}
/*
echo $_POST["No final de semana compraremos a TV de 50' e tomaremos sorvete"];
echo $_POST['t2'];
*/

