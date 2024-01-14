
<?php
$dom=new DOMDocument("1.0","UTF-8");
$xmlfile="Assign7B2.xml";
$dom->formatOutput = true;

$dom->appendChild($dom->createProcessingInstruction(
        'xml-stylesheet', 'type="text/css" href="Assign7B2.css"'
    ));


$root=$dom->createElement("Mayanagari_CD_Store");
$root=$dom->appendChild($root);


$classical = $dom->createElement("Classical");
$classical = $root->appendChild($classical);
$classical->appendChild($dom->createElement("Movie_Name","Titanic"));
$classical->appendChild($dom->createElement("Release_Year",1997));
$classical->appendChild($dom->createElement("Movie_Name","In the Heat of the Night"));
$classical->appendChild($dom->createElement("Release_Year",1967));

$action = $dom->createElement("Action");
$action = $root->appendChild($action);
$action->appendChild($dom->createElement("Movie_Name","The Old Guard"));
$action->appendChild($dom->createElement("Release_Year",2020));
$action->appendChild($dom->createElement("Movie_Name","6 Underground"));
$action->appendChild($dom->createElement("Release_Year",2019));

$horror = $dom->createElement("Horror");
$horror = $root->appendChild($horror);
$horror->appendChild($dom->createElement("Movie_Name","Conjuring"));
$horror->appendChild($dom->createElement("Release_Year",2013));
$horror->appendChild($dom->createElement("Movie_Name","Annabella"));
$horror->appendChild($dom->createElement("Release_Year",2019));

$dom->save("Assign7B2.xml");

echo '<a href="Assign7B2.xml">Click Here to view XML </a>';

?>
