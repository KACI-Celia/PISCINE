<?php

/*Créez une fonction qui met dans un cookie la clé et la valeur données en paramètre. La 
valeur devra être modifiée pour rajouter “swag” à la fin. 
-Prototype : void my_add_to_cookie(string $key, string $value );  
Exemple :  
my_add_to_cookie(“pseudo”, “Max_”);  
// Crée un cookie à la clef “pseudo” et a pour contenu “Max_swag”.   
 */

function my_add_to_cookie(){

    setcookie('pseudo', 'Max');
}