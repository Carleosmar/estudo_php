<div class="titulo">Desafio data</div>

<?php

class data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }

}

$aniversario = new data();
$aniversario->dia = 11;
$aniversario->mes = 05;
$aniversario->ano = 1996;
echo $aniversario->apresentar(), '<br>';