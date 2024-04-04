<?php

/*Créez une classe "MyCalculator", composée de 3 attributs privés "a", "b" et "result", ainsi que 
de leurs getters et setters. "result" contiendra le résultat de la dernière opération effectuée. Ce résultat sera accessible grâce à la méthode "getLastResult". La classe  contiendra 4 méthodes publiques ne prenant aucun paramètre : "addition", "subtraction", 
"multiplication" et "divide". Elles renverront le résultat de leur opération respective.  
Prototype du constructeur : public function __construct(number $a, number $b); 

Exemple : 
$foo = new MyCalculator(30, 12); 
echo $foo->addition()."\n"; 
echo $foo->subtraction()."\n"; 
echo $foo->multiplication()."\n"; 
echo $foo->divide()."\n"; 
echo $foo->getLastResult()."\n"; 
// affiche "42", "18", "360", "2.5" et "2.5"  

 */

class MyCalculator{
    private $a;
    private $b;
    private $result;

    public function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
        $this->result;
    }
    
    public function setA($a){
        $this->a = $a;
    }
    public function getA(){
        return $this->a;
    }

    public function setB($b){
        $this->b = $b;
    }
    public function getB(){
        return $this->b;
    }

    public function setResult($result){
        $this->result = $result;
    }
    public function getResult(){
        return $this->result;
    }
    
    public function getLastResult(){
        return $this->result;
    }

    public function addition(){

        $this->result = $this->a + $this->b;
        return $this-> result;

    
    }

    public function soustraction(){
        $this->result = $this->a - $this->b;
        return $this-> result;

    }

    public function multiplication(){
        $this->result = $this->a * $this->b;
        return $this-> result;

    }

    public function devide(){
        $this->result = $this->a / $this->b;
        return $this-> result;

    }

}
$MyCalculator= new MyCalculator(100, 50);
echo $MyCalculator->addition() ."\n";
echo $MyCalculator->soustraction() ."\n";
echo $MyCalculator->multiplication() ."\n";
echo $MyCalculator->devide() ."\n";
echo $MyCalculator->getLastResult();