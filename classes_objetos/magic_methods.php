<div class="titulo">Métodos Mágicos</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        echo " Construtor invocado!<br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }
    
    function __destruct() {
        echo '<br> E morreu!';
    }

    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar() {
        echo $this . "<br>";
    }
    
    public function __get($atrib) {
        echo "Lendo atributo não declarado: {$atrib}<br>";
    }

    public function __set($atrib, $valor) {
        echo "Alterando atributo não declarado: {$atrib}/{$valor}"; 
    }

    public function __call($metodo, $params) {
        echo "Tentando executar método ${metodo}.";
        echo "<br>, com os parametros";
        print_r($params);
    }
} 

$pessoa = new Pessoa('Ricardo', 45);  // __construct
$pessoa->apresentar(); // chamando o __toString
echo $pessoa, '<br>';  // chamando o __toString
$pessoa->nome = 'Reinaldo';

// chamando o o método diretamente sem o call
$pessoa->apresentar();  

$pessoa->nomeCompleto; //  __get
$pessoa->nomeCompleto= "Muito legal!!"; //  __set

// Acessando o atributo diretamente sem __get
echo '<br>' . $pessoa->nome;  

// __call metodo call não existe pois não existe o objeto
$pessoa->exec(1, 'teste', true, [1, 2, 3]); 

$pessoa = null; // __destruct
