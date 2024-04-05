<?php

/*Copiez le code de votre exercice 4. 

Ajoutez une méthode publique nommée "speak" qui affiche "Hiii hiii hiii" suivi d'un retour à la ligne.

Faites en sorte que lorsqu'on appelle une méthode qui n'existe pas dans la classe "Pony", cela affiche 
"I don't know what to do..." suivi d'un retour à la ligne.   
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
    public function speak(){
        echo "Hiii hiii hiii" ."\n";
    }

}
if (method_exists("Pony","ponyPink")){
    return"I don't know what to do..." ."\n";
}
$pony = new Pony("","","");
echo $pony->ponyPink();
