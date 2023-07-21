<?php
namespace Aritimetica;

class naoInteiroException extends \Exception {

}

function intdiv($a, $b) {
    if($b == 0) {
        throw new \DivisionByZeroError();
    }

    if($a % $b > 0) {
        throw new naoInteiroException();
    }
    return $a / $b;
} 

