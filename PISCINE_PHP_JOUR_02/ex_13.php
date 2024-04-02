<?php

/*Restrictions :
 Interdiction d’utiliser les mots-clés "if" et "else"
 Obligation d’utiliser les ternaires
Écrire une fonction qui retourne "true" si la valeur de la variable passée en paramètre est
supérieure ou égale à 18. Sinon elle retourne "false".
 */

function is_major($val){

return $val>=18 ? true : false;
}
echo is_major(13);


//le resultat ne s'affiche pas ????!!!!!!
?>