<?php

/*Écrire une fonction qui affiche la variable passée en paramètre suivi d'un retour à la ligne si 
celle-ci est supérieure à 0. Sinon elle n’affiche rien. */

function print_positive($positif){

    if($positif > 0){
        return $positif ."\n";
    }else{
        return "Pas de résultas";
    }
}
echo print_positive(12);



?>