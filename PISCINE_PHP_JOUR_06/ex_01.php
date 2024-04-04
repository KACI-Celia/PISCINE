<?php
/*Créez une classe "MyLittleDisplay" composée d'une méthode publique "display" qui se 
contentera d'afficher "Hello" suivi d'un retour à la ligne à chaque appel.  
Exemple : 
$foo = new MyLittleDisplay(); $foo->display(); // affiche "Hello"   

 */

class MyLittleDisplay{

    public function display(){
        echo "Hello \n";
    }
}
$myLittleDisplay= new MyLittleDisplay();
$myLittleDisplay->display();