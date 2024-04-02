<?php


/*créez une fonction « my_aff_global » qui affiche toutes les variables globales seulement si 
elles ne sont pas de type array. Le format sera : ”[nom]  => [valeur]\n”.  
Prototype : void my_aff_global(void);   
 */

$var = '';
function  my_aff_global(){
    global $var;
if($var!==array()){
   var_dump($var);
}
}
my_aff_global();