<?php

/*Écrire une fonction qui retourne une chaîne de caractères composée d'autant de "woof" que 
la valeur de la variable passée en paramètre, suivi d’un retour à la ligne.
 */
function get_angry_dog($nbr){

    
    for($i=0; $i<=$nbr; $i++){

        echo get_angry_dog('');
    }
    
    return "Woof";
}
get_angry_dog(3)

?>