<?php

/*Écrire une fonction qui supprime tous les espaces au début et à la fin de la chaîne "$string" et qui remplace les 3 premières occurrences de la chaine "$word" par la chaine "Pangolin" et qui renvoie le résultat.  
Prototype : string clear_and_replace(string $string, string $word);   
 */

function clear_and_replace($string, $word){
    
    $string = trim($string);  
    echo $string ."\n";

    $word= "bonjour bonjour bonjour bonjour bonjour";
    echo preg_replace('/bonjour/','pangolin', $word,3);
}

clear_and_replace("    La vie est belle   ","");

?>

