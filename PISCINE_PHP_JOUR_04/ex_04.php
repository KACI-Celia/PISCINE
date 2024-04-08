<?php

/*Écrire une fonction qui affiche les informations contenues dans un noeud XML suivies d’un 
retour à la ligne. La fonction renvoie true ou false.  
Prototype : 
bool display_xml_nodes(SimpleXMLElement $xmlstr, string $node); */

function display_xml_nodes(SimpleXMLElement $xmlstr, string $node){

    $results = $xmlstr->xpath("//{$node}");//recherche du noeud(les balises = noeuds) par le chemin xpath(); et les stocker dans un tableau(results)
    foreach($results as $result){//ittération du tableau
        echo $result . "\n";
    }
}

//structure xml:
$xmlstr = '<webacademie> 
<staff> 
<title>Staff Webacademie</title> 
<personnes> 
<personne> 
<name>Francois-Afif Benthanane</name> 
<poste>Fondateur</poste> 
</personne> 
<personne> 
<name>Sophie Viger</name> 
<poste>Directrice</poste> 
</personne> 
<personne> 
<name>Julien Boivin</name> 
<poste>Responsable Pedagogique</poste> 
</personne> 
<personne> 
<name>Elyas Dridba</name> 
<poste>Pangolin</poste> 
</personne> 
</personnes> 
</staff> 
</webacademie>';

$xml = simplexml_load_string($xmlstr);//convertir le xml en string pour etre lu par php grace à la fonction simplexml_load_string();
display_xml_nodes($xml, 'name');
