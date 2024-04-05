<?php

/*Créez une classe "Body" qui aura dans le même ordre : un attribut private "head" qui vaudra 
1 ; Et un attribut protected "arm", un attribut protected "leg", un attribut public "hand" et un attribut 
public "foot" qui vaudront tous 2.  

Cette classe aura une fonction publique "print_inside_attributes" qui affichera dans un "foreach" tous les attributs à l'aide de parcours d'objets. 

L'affichage de chaque attribut se fera de la façon 
suivante : "attribut : valeur", suivi d'un retour à la ligne.

En dehors de cette classe, créez une fonction "print_object_attributes" qui prendra en paramètre un 
objet nommé "object", et qui affichera dans un "foreach" tous les attributs de cet objet à l'aide du 
parcours d'objets.  L'affichage de chaque attribut se fera de la façon suivante : "attribut => valeur", suivi d'un retour à la 
ligne.   
 */
class Body{

    private $head= 1;
    protected $arm =2;
    protected $leg =2;
    public $hand = 2;
    public $foot = 2;

    public function print_inside_attributes(){

    foreach($this as $key=>$value){
        print "$key : => $value \n";
    }
}
}
function print_object_attributes($object){

    foreach($object as $attribut=>$value){
        print"$attribut=>$value" ."\n";
    }
}
$body = new Body();
echo $body->print_inside_attributes();
print_object_attributes($body);