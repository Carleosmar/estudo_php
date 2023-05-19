<div class="titulo">Interface</div>

<?php

interface Animal {
    function respirar();
}

interface Mamifero {
    function mamar();
}

interface canino extends Animal, Mamifero {
    function latir(): String;
}

class Cachorro implements Animal, canino {
    function respirar() {
        return "Irei usar oxigenio";
    }

    function latir(): string {
        return 'au au';
    }

    function mamar() {
        return "Irei usar Leite";
    }
}

$animal = new Cachorro();
echo $animal->respirar(), '<br>';
echo $animal->latir(), '<br>';
echo $animal->mamar(), '<br>';

var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Canino);