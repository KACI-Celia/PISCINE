<?php


require_once('./Challenger.php');
require_once('./Ippo.php');

class Fight{

    private $stMaxIppo;
    private $stMaxChallenger;

    public function __construct($ippo, $challenger){

        $this->stMaxIppo = $ippo->stamina;
        $this->stMaxChallenger = $challenger->stamina2;
    }
    
    private function finCombat($ippo, $challenger){

        if($ippo->stamina > $challenger->stamina2){
            return "le gagnant est : " . $ippo->name ."🥵" ."\n";
        }else{
            return " le gagnant est : " . $challenger->name2 ."👏🏻 "."\n"; 
        }
    }

    public function fighting($ippo, $challenger){
        for($round=1; $round<=10; $round++){

        $this->suprise_ko($round, $ippo , $challenger);

        if($challenger->speed2 > $ippo->speed){
            echo" Le Round " . $round ."a commencé" ."\n";
            $ippo->stamina = $ippo->stamina - $challenger->strengh2;

            echo "Stamina". $ippo->name . " : " . $ippo->stamina . "sur " . $this->stMaxIppo . "\n";

            $challenger->stamina2 = $challenger->stamina2 - $ippo->strengh;
            echo "Stamina". $challenger->name2 ." : " . $challenger->stamina2 . "sur " . $this->stMaxChallenger . "\n";

        }else{

            $challenger->stamina2 = $challenger->stamina2 - $ippo->strengh;

            echo "Stamina". $challenger->name2 ." : " . $challenger->stamina2 . "sur " . $this->stMaxChallenger . "\n";

            $ippo->stamina = $ippo->stamina - $challenger->strengh2;
            echo "Stamina". $ippo->name . " : " . $ippo->stamina . "sur " . $this->stMaxIppo . "\n";

            echo "C'est la fin du combat !!!!" .$round ."\n";
        }
        if($round ===10)echo $this->finCombat($ippo ,$challenger);
        }
    }
    private function suprise_ko($round, $ippo, $challenger){

        if(rand(1,20)===1){//ippo met un ko a challenger

            $ippo->strengh = $challenger->stamina2;
            $challenger->stamina2 = $challenger->stamina2 - $ippo->strengh;

            echo " Le Round " . $round ." a commencé" ."\n";
            echo "Oulala " .$ippo->name . "a mis un KO à ". $challenger->name2 ."au round" .$round . "\n";

            echo "Stamina". $ippo->name . " : " . $ippo->stamina . "sur " . $this->stMaxIppo . "\n";

            echo "Stamina". $challenger->name2 ." : " . $challenger->stamina2 . "sur " . $this->stMaxChallenger . "\n";

            echo $this->finCombat($ippo , $challenger);

            exit();//stoper le script

        }elseif(rand(1, 20)===2){
            //challenger met un ko a ippo

            $challenger->strengh2 = $ippo->stamina;
            $ippo->stamina = $ippo->stamina - $challenger->strengh2;

            echo " Le Round " . $round ."a commencé" ."\n";
            echo "Oulala " .$challenger->name2 . "a mis un KO à ". $ippo->name."au round" .$round . "\n";

            echo "Stamina". $ippo->name . " : " . $ippo->stamina . "sur " . $this->stMaxIppo . "\n";

            echo "Stamina". $challenger->name2 ." : " . $challenger->stamina2 . "sur " . $this->stMaxChallenger . "\n";

            echo $this->finCombat($ippo , $challenger);
            exit();
        }
    }
    public function attack($ippoTechnique, $challengerTechnique , $challenger, $ippo){
        
        if(rand(1,4)){
            $random  = $ippoTechnique;
            $ippoTechnique->random[]=$ippoTechnique->random[0]-$challenger->stamina2;

            echo "youpi";
        }
    }
}
$fight= new Fight($ippo ,$challenger);
echo $fight->fighting($ippo, $challenger);


