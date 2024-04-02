<?php
/*Écrire une fonction qui teste les 2 variables passés en paramètre. Si les variables ont la même
valeur, elle affiche "Same value.". Si les variables ont le même type, elle affiche "Same type.". Si les
variables ont le même type et la même valeur, elle affiche "Same type and value.". Un retour à la
ligne sera effectué après chaque affichage */

function is_same($nb1, $nb2){

    if($nb1==$nb2){
        echo"Same value. \n";
    }elseif($nb1==$nb2){
        echo"Same type. \n";
    }elseif($nb1===$nb2){
        echo"Same type and value. \n";

    }else{
        echo"les valeures sont diffèrentes";
    }
}
is_same(3,6);



?>