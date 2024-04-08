<?php

/*Écrire une fonction qui écrit la chaine de caractère qui lui est passée en premier paramètre, 
dans un fichier passé en second paramètre. Cette fonction a pour troisième paramètre un booleen 
qui, s’il est vrai, concatène la chaine de caractère à celle déjà présente dans le fichier. Dans le cas 
contraire le fichier ne doit contenir que la chaine de caractère envoyée. Par défaut ce paramètre doit 
être faux. La fonction renvoie true ou false.  
Prototype : 
bool my_write_in_file(string $str, string $file, [bool $append = false]);   
 */

function my_write_in_file(string $str ,string $file ,  bool $append = false){

    $mode = $append ? 'a' : 'w';
    
    $file_ = fopen($file,$mode);
    fwrite($file_ , $str);
    fclose($file_);
}


my_write_in_file("Bonjour Paris", 'text.txt');  
