<?php


class Ippo{

    public $name;
    public $strengh;
    public $defense;
    public $stamina;
    public $speed;
    public $ippoTechnique;

    public function __construct($name, $strengh, $defense,$stamina, $speed)
    {
        $this->name = $name;
        $this->strengh = $strengh;
        $this->defense = $defense;
        $this->stamina = $stamina;
        $this->speed = $speed;
        $this->ippoTechnique =array(
            array('smash',1403),
            array('uppercut',1433),
            array('Gazelle Punch',1423),
            array('Dempsey Roll',1453)
        );
    }

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function setStrengh($strengh){
        $this->strengh = $strengh;
    }
    public function getStrengh(){
        return $this->strengh;
    }
    public function setDefense($defense){
        $this->defense = $defense;
    }
    public function getDefense(){
        return $this->defense;
    }
    public function setStamina($stamina){
        $this->stamina = $stamina;
    }
    public function getStamina(){
        return $this->stamina;
    }
    public function setSpeed($speed){
        $this->speed = $speed;
    }
    public function getSpeed(){
        return $this->speed;
    }
}
$ippo= new Ippo("Ippo", 1403 , 867 , 24329 , 178);
echo $ippo->getName() ."\n"; 
echo $ippo->getStrengh() ."\n";
echo $ippo->getDefense() ."\n";
echo $ippo->getStamina() ."\n";
echo $ippo->getSpeed() ."\n";