<?php 

/* Créez les fonctions "get_args" et "get_last_arg" :
-
"get_args" devra retourner tous les arguments passés en paramètre dans un tableau,
-
"get_last_arg" devra renvoyer le dernier argument passé en paramètre.*/


function get_args($array){

    $array = array('Celia', 22, 11.11,'villiers');
    return print_r($array);
}
get_args('');

function get_last_arg(){

    $array = array('Celia', 22, 11.11,'villiers');
    return print_r(end($array));

}
get_last_arg('');

?>