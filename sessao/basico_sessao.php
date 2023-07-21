<div class="titulo">Sessão</div>

<?php
session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Gabriel';
}

echo '<br>';

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'gabriel@azmail.com';
}

?>

<p>
    <a href='exercicio.php?dir=sessao&file=basico_sessao_alterar'>
        Alterar sessão
    </a>
</p>