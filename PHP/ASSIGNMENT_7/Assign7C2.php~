<?php
$dom=new DOMDocument("1.0","UTF-8");
$xmlfile="Assign7C2.xml";
$dom->formatOutput=true;

$dom->appendChild($dom->createProcessingInstruction(
        'xml-stylesheet', 'type="text/css" href="Assign7C2.css"'
    ));

$root=$dom->createElement("Cricket_team");

$in=$dom->createElement("Country");
$in->setAttribute("Name","India");

$pn=$dom->createElement("Player_name","Sachin Tendulkar");
$in->appendChild($pn);
$wc=$dom->createElement("Wickets",4);
$in->appendChild($wc);
$run=$dom->createElement("Runs",655);
$in->appendChild($run);

$en=$dom->createElement("Country");
$en->setAttribute("Name","England");

$pn=$dom->createElement("Player_name","Ben Stokes");
$en->appendChild($pn);
$wc=$dom->createElement("Wickets",6);
$en->appendChild($wc);
$run=$dom->createElement("Runs",476);
$en->appendChild($run);

$root->appendChild($in);

$root->appendChild($en);

$dom->appendChild($root);

$dom->save("Assign7C2.xml");
echo '<a href="Assign7C2.xml">Click Here to view XML </a>';
?>
