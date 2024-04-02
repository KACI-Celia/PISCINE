<?php

/* réez une fonction nommée « declare_globals » qui créé les variables globales suivantes :
a = “hello”
b = “world”
c = “le”
d = “monde”
e = “n’est”
f = “que”
g = “PHP”

Prototype : void declare_globals(void);
*/

$a = "hello";
$b = "world";
$c = "le";
$d = "monde";
$e = "n’est";
$f = "que";
$g = "PHP";

function declare_globals(){

echo $GLOBALS['a'] ."\n";
echo $GLOBALS['b'] ."\n";
echo $GLOBALS['c'] ."\n";
echo $GLOBALS['d'] ."\n";
echo $GLOBALS['e'] ."\n";
echo $GLOBALS['f'] ."\n";
echo $GLOBALS['g'] ."\n";

}

declare_globals();


?>