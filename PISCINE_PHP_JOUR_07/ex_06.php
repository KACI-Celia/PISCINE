<?php
/*Restrictions : 
- Utiliser __get 
- Utiliser __set 

Copiez le code de votre exercice 5. 

Mettez tous les attributs en privé, mais faites en sorte que l'on puisse quand même y accéder via get 
et set.  Quand on y accède en get, cela doit afficher "Ce n'est pas bien de getter un attribut qui est prive !" suivi d'un retour à la ligne, puis retourner l'attribut.  Quand on y accède en set, cela doit afficher "Ce n'est pas bien de setter un attribut qui est prive !" 
suivi d'un retour à la ligne, puis affecter l'attribut de la valeur.  Pour tout get ou set d'un attribut qui n'existe pas, cela doit afficher "Il n'y a pas d'attribut:  " suivi du 
nom de l'attribut, d'un point et d'un retour à la ligne.   
 */

class Pony{
    private $gender;
    private $name;
    private $color;

    public function __construct($gender, $name, $color)
    {
        $this->gender = $gender;
        $this->name = $name;
        $this->color = $color;
    }

    public function __destruct()
    {
        echo "I'm a dead pony. \n";
    }

    public function ponyPink()
    {
        echo "Don't worry, I'm a pony ! \n";
    }

    public function speak(){
        echo "Hiii hiii hiii \n";
    }
    public function __get($propriete)
        {   echo "Ce n'est pas bien de getter un attribut qui est prive !" ."\n";
            return $this->$propriete;
        }

    public function __set($propriete, $value){
        echo "Ce n'est pas bien de setter un attribut qui est privé ! \n" . 
        $this->$propriete = $value;
    }
}

    $pony = new Pony("","","");
    echo $pony->gender;
    $pony->gender = "Male" ."\n";

    echo $pony->name;
    $pony->name = "Ponpon" ."\n";
    
    echo $pony->color;
    $pony->color = "Bleu" ."\n";
    