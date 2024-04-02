<?php

/* Créez une fonction "my_name" qui prend en paramètre une chaine de caractères et qui
affiche "My name is [name]" où "[name]" est remplacé par la variable passée en paramètre. Il doit
être possible d’appeler la fonction sans paramètre auquel cas elle affichera "My name is Pangolin"*/


function my_name($user){

if($user){
    return "My name is $user \n";
}else{
    return "My name is `Pangolin";
}
}

echo my_name('Celia');
//echo my_name('');


?>