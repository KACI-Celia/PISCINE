<?php

/* Copiez le code de l’exercice précédent et créez une classe "Warrior" ainsi qu’une classe 
"Mage" héritant de "Personnage".  Vous modifierez les attributs de chacune de ces classes de la manière suivante : 
 Warrior : 
 CLASSE = "Warrior" 
 life = 100 
 strength = 10 
 agility = 8 
 wit = 3 
 Mage : 
 CLASSE = "Mage" 
 life = 70 
 strength = 3 
 agility = 10 
 wit = 10 Ces deux classes devront implémenter chacune une méthode "attack" qui ne prend aucun 
paramètre. La méthode "attack" de la classe "Warrior" devra afficher: " [NAME]: I'll crush you with my hammer 
!" suivi d’un retour à la ligne. La méthode "attack" de la classe "Mage" devra afficher: " [NAME]: Fell the power of my magic !" suivi 
d’un retour à la ligne. [NAME] sera bien évidement remplacé par le nom de notre personnage. 

Nos personnages sont assez orgueilleux et aiment bien s’annoncer sur le champ de bataille. Vous 
ferez donc en sorte qu’à la création d’un objet "Warrior" ou "Mage", un message soit écrit, ce dernier 
devra être de la forme suivante : 
 Warrior : "[NAME]: I'll engrave my name in the history !" suivi d’un retour à la ligne 
 Mage : "[NAME]: May the gods be with me." suivi d’un retour à la ligne   

Bien que puissants et orgueilleux, nos personnages peuvent mourir, vous ferez donc en sorte 
d’afficher un message à la destruction d’un de ces deux objets, ce message sera le suivant : 
 Warrior : "[NAME]: Aarrg I can't believe I'm dead..." suivi d’un retour à la ligne 
 Mage : "[NAME]: By the four gods, I passed away..." suivi d’un retour à la ligne  
Exemple : 
$warrior = new Warrior("Jean-Luc"); $mage = new Mage("Robert"); $warrior->attack(); $mage->attack(); // affiche "Jean-Luc: I'll engrave my name in the history !", "Robert: May the gods be with me.", 
"Jean-Luc: I'll crush you with my hammer !", "Robert: Fell the power of my magic !", "Robert: By the 
four gods, I passed away..." et "Jean-Luc: Aarrg I can't believe I'm dead..."  

*/
class Personnage{
    protected $name;
    protected $life;
    protected $agility;
    protected $strength;
    protected $wit;

    const CLASSE = 'Personnage';

    public function __construct($name){
        $this->name = $name;
        $this->life= 50;
        $this->agility= 2;
        $this->strength= 2;
        $this->wit= 2;
    }
    
    public function getName(){
        return $this->name ;
    }

    public function getLife(){
        return $this->life;
    }

    
    public function getAgility(){
        return $this->agility;
    }

    
    public function getStrength(){
        return $this->strength;
    }
    
    public function getWit(){
        return $this->wit;
    }
    
    public function getClass(){

        return Personnage::CLASSE;
    }
}

class Warrior extends Personnage{
    const CLASSE ='Warrior';

    public function __construct($name){
        $this->name= $name;
        $this->life= 100;
        $this->agility= 3;
        $this->strength= 10;
        $this->wit= 10;
        echo $this->name . ":  I'll engrave my name in the history! \n";
    }
    
    public function attack(){
        return $this->getName() . ": I'll crush you with my hammer!!!! \n" ;
    }

    public function __destruct()
    {
        echo $this->name ."Aarrg I can't believe I'm dead. " ."\n";
    }
}


class Mage extends Personnage{
    const CLASSE = 'Mage';

    public function __construct($name){
        $this->name= $name;
        $this->life= 70;
        $this->agility= 10;
        $this->strength= 8;
        $this->wit= 3;
        echo $this->name .": I May the gods be with me \n";
    }

    public function __destruct()
    {
        echo $this->name ."By the four gods, I passed away.. " ."\n";
    }
    public function attack(){

    return $this->getName() . ": Fell the power of my magic !!!!! \n";
    }

    

}




// $personnage = new Personnage('Celia');
// echo $personnage->getName() ."\n";
// echo $personnage->getLife() ."\n";
// echo $personnage->getAgility() ."\n";
// echo $personnage->getStrength() ."\n";
// echo $personnage->getWit() ."\n";
// echo $personnage->getClass() ."\n";



$warrior = new Warrior("Destructeur");
echo $warrior->attack();

$mage = new Mage('Bombe');
echo $mage->attack();