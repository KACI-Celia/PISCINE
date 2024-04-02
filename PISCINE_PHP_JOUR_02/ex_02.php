<?php

/*
    Écrire une fonction affiche "Je suis encore mineur." si la variable passée en paramètre est
inférieure à 18, ou "Youpi, je suis majeur !" si elle supérieure ou égale à 18. Un retour à la ligne sera
effectué après chaque affichage.
 */

function mon_age($age){
    
    if($age < 18){
        return "je suis encore mineur";
    }else{
        return"youpiii, je suis majeur";
    }
}
echo mon_age(22);

?>