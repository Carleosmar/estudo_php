<?php
session_start();
print_r($_SESSION);
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?><br>
    <b>Email: </b> <?= $_SESSION['email'] ?><br>
</p>

<?php
$_SESSION['email'] = 'gabrielfilho_alterado@emailaz.com.br';
?>

<p>
    <a href="exercicio.php?dir=sessao&file=basico_sessao">Voltar</a>
</p>

<p>
    <a href="exercicio.php?dir=sessao&file=basico_sessao_limpar">Limpar Sessão</a>
</p>

