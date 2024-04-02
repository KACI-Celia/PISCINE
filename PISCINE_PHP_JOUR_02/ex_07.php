<?php
/*Restrictions : Obligation d’utiliser le mot-clé "foreach"

Écrire une fonction qui affiche toutes les valeurs du tableau passé en paramètre, chacune
séparée par un retour à la ligne. */


$array=[5, 10, 22, 59, 44, 12];

function print_array($array){
    foreach($array as $valeur){
        print_r($valeur ."\n");
    }
}
print_array($array);


?>