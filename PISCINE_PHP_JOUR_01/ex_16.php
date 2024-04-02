<?php

/*Créez une fonction anonyme qui prend en paramètre une variable de type string et qui retourne
son équivalent en majuscule. Vous devrez assigner cette fonction anonyme à une variable "func"
 */

$func = function($string){
    $string="je m'apelle Celia";
    $string = strtoupper($string);
    print($string);
};
$func('');


?>