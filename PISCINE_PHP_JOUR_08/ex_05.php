<?php
/*Votre armée a maintenant besoin d'un médecin appelé Apothecary. Sa mission est de soigner 
les soldats de la class Imperium et de ses enfants grâce à sa méthode heal prenant en paramètre un 
objet. Lorsque l'unité fait bien partie de l'imperium, votre apothicaire criera "No servant of the 
Emperor shall fall if I can help it.", suivi d'un retour à la ligne. Si l'unité ne fait pas partie de 
l'Imperium, il criera alors "The enemies of the Emperor shall be destroyed!" suivi d'un retour à la 
ligne.   L'unité sera appelée de cette manière :   class Imperium { }  class SpaceMarine extends Imperium { }  class Heretic { }   Apothecary::heal(new Imperium());  Apothecary::heal(new SpaceMarine());  Apothecary::heal(new Heretic());   Et devra afficher :  No servant of the Emperor shall fall if I can help it.  No servant of the Emperor shall fall if I can help it.  The enemies of the Emperor shall be destroyed!  
 
Il ne doit pas être possible d’instancier un Apothecary !    
 */