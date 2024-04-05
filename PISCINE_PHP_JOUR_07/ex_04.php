<?php

/*Créez une classe "Pony" qui aura 3 attributs publics : "gender", "name" et "color". 
Faites en sorte qu'on puisse setter ces 3 attributs directement à la construction (dans le même ordre 
que cité précédemment).  
Faites en sorte, qu'à la destruction du poney, la chaîne de caractères  "I'm a dead pony." suivi d'un 
retour à la ligne soit affichée.  
Faites aussi en sorte que lorsqu'on utilise la commande "echo" sur un "Pony", cela affiche "Don't 
worry, I'm a pony !" suivi d'un retour à la ligne.  
 */


class Pony
{
    public $gender;
    public $name;
    public $color;

    public function __construct($gender, $name, $color)
    { 
        $this->gender = $gender;
        $this->name = $name;
        $this->color = $color;
    }
    public function __destruct()
    {
        echo "I'm a dead pony" ."\n";
    }
    public function ponyPink(){
        echo "Don't worry, I'm a pony !" ."\n";
    }
}
$pony = new Pony("","","");
echo $pony->ponyPink();