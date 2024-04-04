<?php

/*ecrire une fonction qui compare la taille de deux chaînes de caractères et qui renvoie la taille 
de la chaine la plus grande. Dans le cas où elles sont de même taille, renvoyer la valeur. Si jamais 
l’une des deux est invalide, la fonction devra renvoyer "-1".  
Prototype : int my_longer(string $str1, string $str2);  
 */

function my_longer($str1, $str2){

    // if(is_string($str1) && is_string($str2)){
    //     return 1;
    // }else{
    //     return -1;
    // }

    if(strlen($str1) > strlen($str2)){
        return $str1;

    }elseif(strlen($str1) < strlen($str2)){
        return $str2;

    }elseif(strlen($str2) == strlen($str1)){
        return $str1;

    }else{
        return 'rien à comparer';
    }
}
echo my_longer('bonjour je suis Celia', 'bonjour je suis Kevin');