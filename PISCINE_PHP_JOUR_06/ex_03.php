<?php

/*Créez une classe "MyLittleAttributes" composée de deux attributs privés, de leurs getters et 
setters ("getA", "getB", "setA" et "setB") ainsi que d'une méthode "display" qui se contentera 
d'afficher les 2 attributs séparés d'un espace et suivi d'un retour à la ligne. 

Prototype du constructeur : public function __construct(string $a, string $b); Exemple : 
$foo = new MyLittleAttributes("Hello", "World"); $foo->display(); // affiche "Hello World"  
 */

class MyLittleAttributes{
    private $name;
    private $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    public function setColor($color){
        $this->color = $color;
    }
    public function getColor(){
        return $this->color;
    }

    public function display(){

        echo $this->name . $this->color ."\n";
        
    }
}

$MyLittleAttributes = new MyLittleAttributes("Celia", " Noir");
$MyLittleAttributes->display();
