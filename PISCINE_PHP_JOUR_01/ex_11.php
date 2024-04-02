<?php

/* Créez une fonction "my_sub" qui ne prend aucun paramètre. Cette fonction devra soustraire
deux variables globales nommées "nb_a" et "nb_b" ("nb_a"
–
"nb_b") et devra assigner le résultat à
la variable globale "nb_a"
.*/
function my_sub(){

    $nb_a= 30;
    $nb_b = 20;
    $nb_a = ($nb_a - $nb_b);
    return $nb_a;
}

echo my_sub();



?>