<?php

/*Les soldats sont la base d'une armée, mais à quelle armée appartiennent-ils, là est la 
question. 
Votre objectif sera de créer 2 classes Soldier. L'une fera partie du namespace Imperium et 
l'autre du Chaos. 
Un soldier possède 3 attributs privés : hp, attack et name, ainsi que leurs 
getter/setter publiques (get/setHp, get/setAttack) Le constructeur du Soldier prendra en paramètre un name, un hp et un attack. Par défaut, les 
soldats de l'Imperium auront 50 hp et 12 attack, les soldats du Chaos auront, quant à eux, 70 hp et 12 
attack. 
Un soldier possède aussi une méthode publique doDamage, prenant en paramètre un object 
soldier et réduisant les hp de ce dernier par la quantité d'attack du soldat attaquant. 

Une dernière chose : Lorsqu'un soldat est appelé (via un echo par exemple), il devra afficher 
"[$name] the [namespace] Space Marine : [$hp] HP." sans retour à la ligne   Le code suivant devra fonctionner :   $spaceMarine = new \Imperium\Soldier("Gessart");  $chaosSpaceMarine = new \Chaos\Soldier("Ruphen");  echo $spaceMarine,"\n"; echo $chaosSpaceMarine,"\n";  $spaceMarine->doDamage($chaosSpaceMarine);  echo $spaceMarine,"\n"; echo $chaosSpaceMarine,"\n";  Et devra afficher :  Gessart the Imperium Space Marine : 50 HP. Ruphen the Chaos Space Marine : 70 HP. Gessart the Imperium Space Marine : 50 HP. Ruphen the Chaos Space Marine : 58 HP.   
 */

namespace Imperium;

    class Soldier{
        private $hp;
        private $attack;
        private $name;

        public function __construct($hp = 50, $attack =12, $name)
        {
            $this->hp = $hp;
            $this->attack = $attack;
            $this->name = $name;
        }
        public function setHp($hp){
            $this->hp = $hp;
        }
        public function getHp(){
            return $this->hp;
        }
        public function setAttack($attack){
            $this->attack = $attack;
        }
        public function getAttack(){
            return $this->attack;
        }
        public function doDamage($soldier){

        }
    }


namespace Chaos;

    class Soldier{
        private $hp;
        private $attack;
        private $name;

        public function __construct($hp = 70, $attack =12, $name)
        {
            $this->hp = $hp;
            $this->attack = $attack;
            $this->name = $name;
        }
        public function setHp($hp){
            $this->hp = $hp;
        }
        public function getHp(){
            return $this->hp;
        }
        public function setAttack($attack){
            $this->attack = $attack;
        }
        public function getAttack(){
            return $this->attack;
        }
    }