<?php
session_start();
if(!$_SESSION['usuario']) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recurso/CSS/estilo.css">
    <link rel="stylesheet" href="recurso/CSS/exercicio.css">
    <title>Curso PHP</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso de PHP</h1>
        <h2>Índice dos Exercicios</h2>
    </header>
    <nav class="navegacao">
        
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php 
                require_once('menu.php');
            ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
    
</body>
</html>