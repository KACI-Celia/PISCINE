<?php
/*Restrictions : 
- Utiliser le Trait avec le mot-clé "use". 
- Utiliser la fonction str_replace 2 fois. 
- Ne pas écrire 2 fois la fonction sing_a_song 

Copiez le code de votre exercice 2. 
Vous allez apprendre à chanter à vos 2 warriors. 

Créez un trait "Singer" qui contiendra une fonction "sing_a_song". 

Cette fonction affichera la chaîne 
de caractères "Trolololololol" suivi d'un retour à la ligne, puis transformera tous les 'o' en 'a' et 
réaffichera la chaîne suivi d'un retour à la ligne, pour enfin transformer tous les 'a' en 'i' et réaffichera 
la chaîne suivi d'un retour à la ligne.    
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

    USE Singer;
}


class LaFouine extends Warrior{

    public function represent()
    {
        echo 78 ."\n";
    }
    public function shout(){
        echo "Je suis proprietaire" . "\n";
    }
    USE Singer;
}

interface GoodManners{

    public function say_please();
    public function say_thank();
    public function say_sorry($name);

    const END_WORDS = "dirais-je";
}

trait Singer{
    public function sing_a_song(){

        echo "Trolololololol" . "\n";
        echo str_replace("o", "a", "Trolololololol")."\n";
        echo str_replace("o", "i", "Trolololololol")."\n";
    }
}

// $bouba = new Bouba('');
// echo $bouba->represent();
// echo $bouba->shout();

// $lafouine= new LaFouine('');
// echo $lafouine->represent();
// echo $lafouine->shout();

// $bouba= new Bouba(''); 
// echo $bouba->say_please(). GoodManners::END_WORDS ."\n";
// echo $bouba->say_thank(). GoodManners::END_WORDS ."\n";
// echo $bouba->say_sorry('CeLia '). GoodManners::END_WORDS ."\n";

$bouba= new Bouba('');
echo $bouba->sing_a_song();

$lafouine= new LaFouine('');
echo $lafouine->sing_a_song();
