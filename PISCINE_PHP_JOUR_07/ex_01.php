<?php


/*Créez une classe abstraite "Warrior". Elle aura une méthode publique nommée "attack" qui 
affichera "I'll kill you, poor noob !!!" suivi d'un retour à la ligne, et 2 méthodes publiques abstraites : 
"represent" et "shout". 

Créez une classe "Booba" qui hérite de "Warrior". Sa méthode "represent" devra afficher "92" suivi 
d'un retour à ligne, et sa méthode "shout" devra afficher "Bah bien Morray !". 

Créez une classe "LaFouine" qui hérite de "Warrior". Sa méthode "represent" devra afficher "78" 
suivi d'un retour à ligne, et sa méthode "shout" devra afficher "Je suis proprietaire !".   

 */

abstract class Warrior{

    public function attack(){
        echo "I'll kill you, poor noob!!! " . "\n";
    }
    abstract public function represent();
    abstract public function shout();
}

class Bouba extends Warrior{

    public function represent()
    {
        echo 92 ."\n";
    }
    public function shout(){
        echo "Bah bien Morray" . "\n";
    }
}


class LaFouine extends Warrior{

    public function represent()
    {
        echo 78 ."\n";
    }
    public function shout(){
        echo "Je suis proprietaire" . "\n";
    }
}
$bouba = new Bouba('');
echo $bouba->represent();
echo $bouba->shout();

$lafouine= new LaFouine('');
echo $lafouine->represent();
echo $lafouine->shout();





















// abstract class Warrior
// {
//     public function attack(){
//         echo "I'll kill you, poor noob !!!" ."\n" ;
//     }
//     abstract public function represent();
//     abstract public function shout();

// }
// class Bouba{

// }

// class LaFouine{

// }