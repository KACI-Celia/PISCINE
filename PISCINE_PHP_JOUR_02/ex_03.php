<?php

/*Écrire une fonction qui affichera "Enfantillage..." pour une variable passée en paramètre
inférieure ou égale à 0, "I'm the best." si la valeur est 42, sinon elle affichera "Mon age est cool.". Un
retour à la ligne sera effectué après chaque affichage */

function print_age($age){
    
    if($age<=0 ){
        echo "Enfantillage...";
    }elseif($age == 42 ){
        echo"I'm the best";
    }else{
        echo"Mon age est cool";
    }
}
print_age(42);

?>