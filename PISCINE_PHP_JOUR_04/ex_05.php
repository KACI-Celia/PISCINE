<?php
/*Ecrire une fonction qui transforme une chaine de caractères contenant du JSON en objet et le 
retourne.  
Prototype : 
object json_to_xml_nodes(string $json) */

function json_to_xml_nodes(){

    $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
    echo json_decode($json);

}
 json_to_xml_nodes();