<?php

/*Créez une interface “iCars” dans laquelle vous implémenterez les méthodes suivantes : - getPrice() qui retourna la valeur de l’attribut privé “_price” - getWeight() qui retourna la valeur de l’attribut privé “_weight” - mineIsBigger($obj) sur laquelle nous reviendrons plus tard dans le sujet.  

Créez ensuite les classes “BMW” et “Suzuki” qui implémenteront l’interface “iCars”. 
Vous 
ajouterez les attributs privés “$_price” et “$_weight”. Il doit être possible d’instancier des objets 
issus de ces 2 classes en indiquant leur prix ET leur poids ou en indiquant seulement leur prix. 

Si aucun poids n’est passé en paramètre vous assignerez “4242” à l’attribut “$_weight”. 

Implémentez la méthode statique “lessExpensive” dans ces deux classes. Cette méthode 
devra retourner 15000 pour la classe “BMW” et 5000 pour la classe “Suzuki” et pourra être appelé 
sans instance d’objet. 

La méhode mineIsBigger devra prendre un objet en paramètre. S’il s’agit d’une “Toyota” vous 
devrez afficher “Mine is bigger”, s’il s’agit d’une “Smart” vous devrez afficher “Mine is way bigger !” 
et enfin, s’il s’agit d’un “Velib” vous devrez afficher “LOL”. Dans tous les autres cas vous afficherez 
“Show me !”.   
 */

interface Icars{

    public function getPrice();
    public function getWeight();
    public function mineIsBigger($obj);
}

class BMW implements Icars{

    private $_price;
    private $_weight;
    public static $color = "red";
    public $background = "bladck";
    
    public function __construct($_price, $_weight = 4242)
    {
        $this->_price = $_price;
        $this->_weight = $_weight;

    }
    public function getPrice()
    {
        
        return $this->_price;
    }
    public function getWeight()
    {
        return $this->_weight;
    }

    public function mineIsBigger($obj)
    {
        if($obj instanceof Toyota){
            return "Mine is bigger" ."\n";
        }elseif($obj instanceof Smart){
            return "Mine is way bigger" ."\n";
        }elseif($obj instanceof Velib){
            return "LOL" ."\n";
        }else{
            return "Show me" ."\n";
        }
    }
    public static function lessExpensive(){
        return 15000 ."\n";
    }
}
class Suzuki implements Icars{

    private $_price;
    private $_weight;

    public function __construct($_price, $_weight = 4242)
    {
        $this->_price = $_price;
        $this->_weight = $_weight;

    }

    public function getPrice()
    {
    
        return $this->_price;
    }
    public function getWeight()
    {
        return $this->_weight;

    }
    public function mineIsBigger($obj)
    {
        if($obj instanceof Toyota){
            return "Mine is bigger" ."\n";
        }elseif($obj instanceof Smart){
            return "Mine is way bigger" ."\n";
        }elseif($obj instanceof Velib){
            return "LOL" ."\n";
        }else{
            return "Show me" ."\n";
        }
    }
    public static function lessExpensive(){
        return 5000 ."\n";
    }
}
class Toyota{}
class Smart{}
class Velib{}

$bmw = new BMW(222);
echo $bmw->getPrice() ."\n";
echo $bmw->getWeight() ."\n";
echo $bmw->mineIsBigger(new Toyota());
echo $bmw->mineIsBigger(new Smart());
echo $bmw->mineIsBigger(new Velib());
echo "voiture la moins chere " . BMW::lessExpensive();

$suzuki = new Suzuki(456);
echo $suzuki->getPrice() ."\n";
echo $suzuki->getWeight() ."\n";
echo $suzuki->mineIsBigger(new Toyota());
echo $suzuki->mineIsBigger(new Smart());
echo $suzuki->mineIsBigger(new Velib());
echo "voiture la moins chere " . Suzuki::lessExpensive();


$audi = new BMW(222);
$peugeot = new BMW(222);

// BMW
// echo $bmw->color; // red 
echo BMW::$color; // red -> YELLOW
// PEUGEOT
// echo $peugeot->color; // red
$peugeot->background = "green";
echo $peugeot->background;

// AUDI
// echo $audi->color; // red
echo BMW::$color; // red //  -> YELLOW

// PEUGEOT
echo $audi->background; // blakc