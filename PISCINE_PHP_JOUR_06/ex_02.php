<?php

/*Créez une classe "MyLittleAttribute" composée d'une méthode publique "display" qui se 
contentera d'afficher l'attribut passé en paramètre du constructeur, suivi d'un retour à la ligne.  
Exemple : 
$foo = new MyLittleAttribute("Jean-Luc"); $foo->display(); // affiche "Jean-Luc"  
 */


class MyLittleAttribute{

    public $name;

    public function __construct($name)
        {
            echo $this->name = $name ."\n";  
        }
    public function display(){
        return $this->name;
    }

}
$MyLittleAttribute = new MyLittleAttribute('Celia');
$MyLittleAttribute->display();