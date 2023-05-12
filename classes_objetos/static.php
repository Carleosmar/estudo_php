<div class="titulo">Membros Estáticos</div>

<?php

class A {
    public $naoStatic = 'Varivel de instancia';
    public static $static = 'Variavel de classe (estatica)';

    public function mostrarA() {
        echo "Não estática = {$this->naoStatic}<br>";
        // Tentativa 1
        //echo "Estatica = {$this->static}<br>";
        // Tentativa 2
        // echo "Estatica = {self::$static}<br>;
        echo "Estatica = " . self::$static . "<br>";

    }

    public static function mostrarStaticA() {
        //echo "Não estática = {$this->naoStatic}<br>";
        //echo "Estatica = {$static}<br>";
        echo "Estatica = " . self::$static . "<br>";
    }

}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA();// Não é a forma ideal

echo '<br>';
echo A::$static, '<br>'; // Acessar diretamente pela classe
A::mostrarStaticA(); // acessar diretamente pela classe

A::$static = 'Aleterando membro de classe';
echo A::$static, '<br>';