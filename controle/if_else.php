<div class="titulo">If Else</div>

<?php

if(true){
    echo "Serei impresso?<br>";
    echo "Serei impresso novamente<br>";
}
    
if(false){
    echo "Verdadeiro - Parte A<br>";
    echo "Verdadeiro - Parte B<br>";
} else{
    echo "Falso - Parte B<br>";
    echo "Falso - Parte B<br>";
}
if(false) {
    echo "Passo A<br>";
} else if(false) {
    echo "Passo B<br>";
} else if(true) {
   echo "Passo C<br>";  
} else {
    echo "Ultimo Passo<br>";
}


echo "Fim<br>";