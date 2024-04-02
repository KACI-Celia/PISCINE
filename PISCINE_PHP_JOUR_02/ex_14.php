<?php
/*Restrictions :  
 Obligation d’utiliser le mot-clé "goto" 
 Interdiction d’utiliser "do while", "while", "for" 
 Interdiction d’utiliser plus d’une fois "echo"  

Écrire une fonction qui affiche 42 fois le mot "woop", suivi d'un retour à la ligne à chaque fois.   
Prototype : void brouhaha(void); 

 */
function brouhaha(){
    $i=0;
    loop:
        echo"woop \n";
        $i++;
        if($i<=42) goto loop;

} 
brouhaha();

?>