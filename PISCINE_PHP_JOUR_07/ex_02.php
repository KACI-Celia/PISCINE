<?php

/*Copiez le code de votre exercice 1. 
Vous allez apprendre les bonnes manières à "Booba". 

Créez une interface "GoodManners" qui contiendra 3 méthodes publiques : "say_please", 
"say_thank" et "say_sorry", qui elle, prendra un paramètre nommé "name". Elle contiendra aussi une constante nommée END_WORDS qui sera égale à ", 
dirais-je.
" La classe "Booba" implémentera cette interface avec ses méthodes. Sa méthode "say_please" 
affichera "S'il-te-plait", sa méthode "say_thank" affichera "Merci", et sa méthode "say_sorry" 
prendra un nom en paramètre et affichera "Mille excuses " suivi du nom. Chacun de ces affichages se 
termineront par la constante END_WORDS suivi d'un retour à la ligne.  
Exemple : $booba = new Booba(); $booba->say_thank(); // affiche "Merci, dirais-je."   
 */

abstract class Warrior{

    public function attack(){
        echo "I'll kill you, poor noob!!! " . "\n";
    }
    abstract public function represent();
    abstract public function shout();
}

class Bouba extends Warrior implements GoodManners{

    public function represent()
    {
        echo 92 ."\n";
    }
    public function shout(){
        echo "Bah bien Morray" . "\n";
    }

    public function say_please()
    {
        echo "S'il-te-plait!, " ;
    }
    public function say_thank()
    {echo "Merci, " ;
        
    }
    public function say_sorry($name)
    {
        echo"Mille excuses, ". $name;
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

interface GoodManners{

    public function say_please();
    public function say_thank();
    public function say_sorry($name);

    const END_WORDS = "dirais-je";
}



// $bouba = new Bouba('');
// echo $bouba->represent();
// echo $bouba->shout();

// $lafouine= new LaFouine('');
// echo $lafouine->represent();
// echo $lafouine->shout();

$bouba= new Bouba(''); 
echo $bouba->say_please(). GoodManners::END_WORDS ."\n";
echo $bouba->say_thank(). GoodManners::END_WORDS ."\n";
echo $bouba->say_sorry('CeLia '). GoodManners::END_WORDS ."\n";