<?php

/*Restrictions : Obligation d’utiliser le mot-clé "foreach" 

Écrire une fonction qui remplace toutes les valeurs du tableau passé en paramètre par la 
chaîne de caractères "poney".  
Prototype : void make_poneys(array &$my_array);     
 */



function make_poneys($my_array){
    
    foreach($my_array as $value){
        $value= "poney";
    }

}
$my_array = [1,3,"celia"];
make_poneys($my_array);
print_r($my_array);

//juste un essaie, mais ce n'est pas bon --> à revoir