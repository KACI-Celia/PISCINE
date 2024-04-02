<?php

/*
Écrire une fonction qui échange le contenu de deux variables dont les références sont
données en paramètres.
 */



function change($val1 = 'name1', $val2 = 'name2'){

    return $val1 . $val2;

}
echo change('hello' ,  ' you') 
?>