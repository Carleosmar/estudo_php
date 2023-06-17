<div class="titulo">Desafio data</div>

<?php

class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$aniversario = new Data();
$aniversario->dia = 11;
$aniversario->mes = 5;
$aniversario->ano = 1996;
echo $aniversario->apresentar();