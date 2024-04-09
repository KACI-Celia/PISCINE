<?php


class Challenger{

    public $name2;
    public $strengh2;
    public $defense2;
    public $stamina2;
    public $speed2;

    public $jab;
    public $uppercut2;
    public $crochet;
    public $enchainement;

    public function __construct($name2, $strengh2, $defense2,$stamina2, $speed2, $jab, $uppercut2,$crochet ,$enchainement)
    {
        $this->name2 = $name2;
        $this->strengh2 = $strengh2;
        $this->defense2 = $defense2;
        $this->stamina2 = $stamina2;
        $this->speed2 = $speed2;

        $this->jab = $jab;
        $this->uppercut2 = $uppercut2;
        $this->crochet = $crochet;
        $this->enchainement = $enchainement; 
    }

    public function setName2($name2){
        $this->name2 = $name2;
    }
    public function getName2(){
        return $this->name2;
    }
    public function setStrengh2($strengh2){
        $this->strengh2 = $strengh2;
    }
    public function getStrengh2(){
        return $this->strengh2;
    }
    public function setDefense2($defense2){
        $this->defense2 = $defense2;
    }
    public function getDefense2(){
        return $this->defense2;
    }
    public function setStamina2($stamina2){
        $this->stamina2 = $stamina2;
    }
    public function getStamina2(){
        return $this->stamina2;
    }
    public function setSpeed2($speed2){
        $this->speed2 = $speed2;
    }
    public function getSpeed2(){
        return $this->speed2;
    }
    public function setJab($jab){
        $this->jab = $jab;
    
    }
    public function getJAb(){
        return $this->jab;
    }
    public function setUppercut($uppercut2){
        $this->uppercut2 = $uppercut2;
    }
    public function getUppercut(){
        return $this->uppercut2;
    }
    public function setCrochet($crochet){
        $this->crochet= $crochet;
    }
    public function getCrochet(){
        return $this->crochet;
    }
    public function setEnchainement($enchainement){
        $this->enchainement = $enchainement;
    }
    public function getEnchainement(){
        return $this->enchainement;
    }
}
$challenger = new Challenger("Challenger", 1102 ,920 ,27329, 200,1102, 1122, 1117 , 1132);
echo $challenger->getName2() ."\n";
echo $challenger->getStrengh2() ."\n";
echo $challenger->getDefense2() ."\n";
echo $challenger->getStamina2() ."\n";
echo $challenger->getSpeed2() ."\n";
echo $challenger->getJAb();