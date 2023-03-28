<div class="titulo">Minha Tabela</div>

<?php

$matriz = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20']
];

foreach($matriz as $valor){
    foreach($valor as $linhas) {
        echo $linhas;
    }
    echo '<br>';
}
echo "<br><hr>";
?>
<table>
    <?php
        foreach($matriz as $valor) {
            echo '<tr>';
                foreach($valor as $celula) {
                    echo "<td>$celula</td>";
                }
            echo '</tr>';
            }
            
    ?>
</table>

<br><hr>

<table>
    <?php
        foreach($matriz as $index => $valor) {
            $style = $index % 2 === 0 ?
            'background-color: lightblue' : '';
            echo "<tr style = '{$style}'>";
            foreach($valor as $celula) {
                echo "<td>$celula</td>";
            }
            echo "</tr>";
        }
        
    ?>
</table>



<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        border: 1px solid #444;
        padding: 10px 20px;
    }
</style>