<?php

/*
Créez une fonction "pangolin" qui affiche le message "I am a Pangolin". Créez une fonction
"student" qui affiche le message "I am a student and my name is [name]" où "[name]" est remplacé
par la valeur de la variable passée en paramètre.
Créez également les variables "func_pangolin" et "func_student" et faites en sorte qu’il soit
possible d’appeler la fonction "pangolin" avec la variable "func_pangolin" et la fonction "student"
avec la variable "func_student"
.
 */

function pangolin(){
    echo "I am a pangolin \n";
}
$func_pangolin = 'pangolin';
$func_pangolin();

function student($name){
    echo "my name is $name \n";
}
$func_student = 'student';
$func_student('Celia');



?>