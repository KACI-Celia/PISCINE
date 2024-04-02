<?php
/* Écrire une fonction qui affiche tous les entiers de 0 à la valeur de la variable passée en
paramètre et retourner « true ». Si la valeur est négative, la fonction doit afficher "Nunuche !" et
retourner « false ». Un retour à la ligne sera effectué après chaque affichage.*/

function print_until($max){

    if($max < 0){
        echo "Nunuche \n";
        return false;
    }
    $i = 0;
    while($i <= $max){
        echo $i ."\n";
        $i++;
    }
    return true;
}

print_until(10);
//le 1 du terminal ça correspond à quoi?(ça reprend à 1 à chaque fois)
?>