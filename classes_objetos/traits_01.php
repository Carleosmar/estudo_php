<div class="titulo">Traits #01</div>

<?php

use Usuario as GlobalUsuario;

trait validacao {
    public $a = 'valor a';
    
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public $b = 'valor b';
    private $c = 'valor c (privado)';

    public function validarStringMelhor($str) {
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor;

    public function imprimirValorC() {
        echo '<br>', $this->c;
    }
}

$usuario = new Usuario;
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(' '));
echo '<br>';
echo $usuario->a, '<br>',  $usuario->b;
echo $usuario->imprimirValorC();