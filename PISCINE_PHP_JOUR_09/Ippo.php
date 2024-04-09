<?php


class Ippo{

    public $name;
    public $strengh;
    public $defense;
    public $stamina;
    public $speed;

    public $smash;
    public $uppercut;
    public $gazellepunch;
    public $dempseyroll;

    public function __construct($name, $strengh, $defense,$stamina, $speed, $smash, $uppercut, $gazellepunch, $dempseyroll)
    {
        $this->name = $name;
        $this->strengh = $strengh;
        $this->defense = $defense;
        $this->stamina = $stamina;
        $this->speed = $speed;

        $this->smash = $smash;
        $this->uppercut = $uppercut;
        $this->gazellepunch = $gazellepunch;
        $this->dempseyroll = $dempseyroll;

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
    public function setSmach($smash){
        $this->smash = $smash;
    }
    public function getSmash(){
        return $this->smash;
    }
    public function setUppercut($uppercut){
        $this->uppercut = $uppercut;
    }
    public function getUppercut(){
        return $this->uppercut;
    }
    public function setGazellepunch($gazellepunch){
        $this->gazellepunch = $gazellepunch;
    }
    public function getGazellepunch(){
        return $this->gazellepunch;
    }
    public function setDempsyroll($dempsyroll){
        $this->dempseyroll = $dempsyroll;
    }
    public function getDempsyroll(){
        return $this->dempseyroll;
    }

}
$ippo= new Ippo("Ippo", 1403 , 867 , 24329 , 178, 1403, 1433, 1423, 1453);
echo $ippo->getName() ."\n"; 
echo $ippo->getStrengh() ."\n";
echo $ippo->getDefense() ."\n";
echo $ippo->getStamina() ."\n";
echo $ippo->getSpeed() ."\n";