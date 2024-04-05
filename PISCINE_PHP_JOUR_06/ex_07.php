<?php 

/*Dans cet exercice vous réutiliserez les classes de l’exercice précédent, copiez les donc dans 
votre répertoire de rendu. Nous avons maintenant des personnages qui peuvent être magiciens ou guerrier et qui peuvent 
attaquer, c’est bien mais ils ne peuvent toujours pas bouger ! C’est assez embêtant. Afin d’ajouter ce 
comportement à nos classes, nous allons créer une interface "iMovable" qui contiendra les méthodes 
suivantes: "moveRight", "moveLeft", "moveUp" et "moveDown". Vous implémenterez ensuite cette interface à la classe "Personnage". Vos méthodes devront respectivement afficher le message suivant: 
 moveRight -> "[NAME]: moves right." suivi d’un retour à la ligne 
 moveLeft -> "[NAME]: moves left." suivi d’un retour à la ligne 
 moveUp -> "[NAME]: moves up." suivi d’un retour à la ligne 
 moveDown -> "[NAME]: moves down." suivi d’un retour à la ligne 
Exemple : 
$warrior = new Warrior("Jean-Luc"); $warrior->moveRight(); $warrior->moveLeft(); $warrior->moveDown(); $warrior->moveUp(); // affiche "Jean-Luc: I'll engrave my name in the history !", "Jean-Luc: moves right.", "Jean-Luc: moves 
left.", "Jean-Luc: moves down.", "Jean-Luc: moves up." et "Jean-Luc: Aarrg I can't believe I'm dead... "  
 */