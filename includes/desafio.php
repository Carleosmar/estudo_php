<div class="titulo">Desafio do modulo</div>
<?php
require_once('usuario.php');


ini_set('display_errors', 1);
$usuario = new Usuario ('gustavo mendes', 21, 'gust_mendes');
$usuario->apresentar();
unset($usuario);