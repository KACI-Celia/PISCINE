<?php

/* Restrictions :
 Interdiction d’utiliser le mot-clé "if"
 Obligation d’utiliser le mot-clé "do while"

Écrire une fonction qui affiche tous les entiers de la variable passée en paramètre jusqu'à la
valeur 42. Si la valeur est supérieure à 42, elle devra quand même être affichée une fois. Un retour à
la ligne sera effectué après chaque affichage.*/


function print_range($min){

do{
    echo $min . "\n";
    $min++;
}while($min<=42);

}

print_range(30);


?>
