<?php

/*Écrire une fonction qui affiche : "Results : [arr1] - [arr2] - [arr3]\n". - "[arr1]" devra être remplacé par l’arrondi de "nb" à l’entier le plus proche. - "[arr2]" devra être remplacé par l’arrondi de "nb" à l’entier supérieur. - "[arr3]" devra être remplacé par l’arrondi de "nb" à l’entier inférieur.   
Prototype : void my_rounds(float $nb);   
 */


function my_rounds($nb){
    $round = round($nb);
    $ceil = ceil($nb);
    $floor= floor($nb);

}
my_rounds(12,3455666);