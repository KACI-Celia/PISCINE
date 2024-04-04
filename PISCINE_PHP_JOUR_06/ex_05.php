<?php

/*Créez une classe "Personnage" composée des attributs protégés "name", "life", "agility", 
"strength", "wit", de la constante "CLASSE" et des getters qui y correspondent.  Ces attributs auront les valeurs suivantes: 

 name = argument passé au constructeur 
 life = 50 
 agility = 2 
 strength = 2 
 wit = 2 
Exemple : 
$perso = new Personnage("Jean-Luc"); echo $perso->getName()."\n"; echo $perso->getLife()."\n"; echo $perso->getAgility()."\n"; echo $perso->getStrength()."\n"; echo $perso->getWit()."\n"; echo $perso->getClasse()."\n"; // affiche "Jean-Luc", "50", "2", "2", "2" et "Personnage"  
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
        return $this->name;
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
$personnage = new Personnage('celia');
echo $personnage->getName() ."\n";
echo $personnage->getLife() ."\n";
echo $personnage->getAgility() ."\n";
echo $personnage->getStrength() ."\n";
echo $personnage->getWit() ."\n";
echo $personnage->getClass() ."\n";

