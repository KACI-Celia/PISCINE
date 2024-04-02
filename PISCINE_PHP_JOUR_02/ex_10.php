<?php
/* Écrire une fonction qui prend un nombre entier en paramètre. Si la valeur est 3, elle affiche
"Les trois freres". Si la valeur est 6, elle affiche "Sixieme sens". Pour 23, elle affiche "Le nombre 23".
Et pour 28, elle affiche "28 jours plus tard". Sinon, elle affiche "Je ne connais pas.". Un retour à la
ligne sera effectué après chaque affichage.*/

function print_film_from_nbr($nbr){

    switch($nbr)
    {
        case 3:
            echo"Les trois freres";
            break;
        case 6:
            echo"Sixieme sens";    
            break;
        case 23:
            echo"Le nombre 23";
            break;
        case 28;     
            echo "28 jours plus tard";
            break;
        default:
            echo "Je ne connais pas.";
            break;
    }
}
print_film_from_nbr(6);