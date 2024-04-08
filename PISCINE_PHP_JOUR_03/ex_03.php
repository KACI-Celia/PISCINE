<?php

/*Créez une fonction qui met dans un cookie la clé et la valeur données en paramètre. La 
valeur devra être modifiée pour rajouter “swag” à la fin. 
-Prototype : void my_add_to_cookie(string $key, string $value );  
Exemple :  
my_add_to_cookie(“pseudo”, “Max_”);  
// Crée un cookie à la clef “pseudo” et a pour contenu “Max_swag”.   
 */


function my_add_to_cookie($key, $value){

    $valueUpdated = $value . "swag" ;
    $unAn = 365*24*3600;
    setcookie($key, $valueUpdated, time()+$unAn);
    //setcookie pour creer le cookie

}

my_add_to_cookie("pseudo","Max_");
echo $_COOKIE["pseudo"];//appeler le cookie