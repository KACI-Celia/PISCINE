<?php

/*Écrire une fonction qui prend en paramètre une chaine de caractères et qui affiche les 
caractères entre le premier arobase rencontré et le premier point suivant celui-ci, suivi d’un retour à 
la ligne. En cas d‘erreur, la fonction n’affichera rien.  
Prototype : void my_mail(string $mail);  
Exemple :  
 my_mail("pedagowac@epitech.eu"); // Cet appel devra afficher "epitech\n" */

function my_mail($mail){

    echo substr('stephcurry@warriors.com', 11, 8)."\n";
    }
    
my_mail('stephcurry@warriors.com');
//voir une autre façon car on n'a pas utilisé le $mail