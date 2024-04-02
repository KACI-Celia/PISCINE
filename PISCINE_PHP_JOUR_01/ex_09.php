<?php 
/*
    créez une fonction "aff_variable"
Cette fonction devra afficher la chaîne de caractères suivante :
"variable = [val]" où "[val]" est remplacé par la valeur de la variable passé en paramètre.
 */

function aff_variable ($variable = "soleil")
{
    return $variable;
}
//echo aff_variable();
echo aff_variable($variable = "nuages");


?>