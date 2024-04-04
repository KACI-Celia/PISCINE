<?php

/* Créer une fonction nommée my_create_file. Cette fonction prend en paramètre une chaine
de caractères et elle crée un fichier vide nommé « $name.txt ». La fonction retourne true ou false

Prototype :
bool my_create_file(string $name) ;
*/


function my_create_file($string){

    try{
        $name = fopen("$string.txt", "w");
        return true;
    }catch(Exception $erreur){
            echo $erreur;
            return false;
        }
}//ça ne fonctionne pas(le $name est grisé!!!!)
my_create_file('name');