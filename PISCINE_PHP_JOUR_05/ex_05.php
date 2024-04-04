<?php

/*Écrire une fonction qui prend en paramètre une chaîne de caractères. Elle doit la retourner 
avec pas plus d’un espace consécutif entre chaque mot, ni aucun espace au début et à la fin, le tout 
avec une majuscule à chaque fin de mot uniquement. En cas d'erreur, si les arguments ne sont pas 
du bon type ou si la fonction est appelée sans argument, la fonction devra retourner NULL.  
Prototype : mixed str_lower_epur(string $str); */

function str_lower_epur($str){

    //$str= ucwords($str);
    foreach($mots as $mot){
        
    }
    return implode(" ", preg_split("/ +/", trim($str)));
}
echo str_lower_epur("   le jardin    d'eden    ");
