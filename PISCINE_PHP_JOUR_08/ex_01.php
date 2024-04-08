<?php

/*Dans cet exercice vous devrez appeler 5 fois la fonction “call_pangolin” (qui ne prend aucun 
paramètre). 

Vous devrez faire attention à catch les erreurs si jamais elles sont “throw” par la fonction 
“call_pangolin” et à les afficher avec la méthode de la classe Exception “getMessage()”.  

La fonction call_pangolin sera créée par la pangolinette, ne l’insérez pas 
dans votre fichier.    
 */

function call_pangolin(){
    try{
        throw new Exception("error");
    }catch(Exception $e){
        echo $e->getMessage() ."\n";
    }
}
call_pangolin();
call_pangolin();
call_pangolin();
call_pangolin();
call_pangolin();