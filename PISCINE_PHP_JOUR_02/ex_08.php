<?php

/* Écrire une fonction qui affiche toutes les clés et valeurs du tableau passé en paramètre sous
la forme « clé : valeur ». Un retour à la ligne sera effectué après chaque affichage.*/




function print_array_with_key(){

    $array =['Celia', 'KACI', 29, 'Musculation'];

    foreach($array as $index => $key){
        echo"$index => $key \n";
    }
}
print_array_with_key($array);

?>