<?php


/* Créez une fonction "return_calls" qui ne prend aucun paramètre et qui retourne le nombre
de fois qu’elle est appelée.*/


function return_calls(){

    static $nb_calls = 0;
    $nb_calls++;
    return $nb_calls;
} 

echo return_calls() ."\n";
echo return_calls() ."\n";
echo return_calls() ."\n";



?>