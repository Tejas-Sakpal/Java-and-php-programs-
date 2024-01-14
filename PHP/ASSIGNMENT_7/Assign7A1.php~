<?php

	$dom = new DOMDocument();

		$dom->encoding = 'utf-8';

		$dom->xmlVersion = '1.0';

		$dom->formatOutput = true;

	$xml_file_name = './Assign7A1.xml';

    $dom->appendChild($dom->createProcessingInstruction(
        'xml-stylesheet', 'type="text/css" href="Assign7A1.css"'
    ));

    $root = $dom->createElement('Course');

    $root = $dom->appendChild($root);

    $CS = $dom->createElement("Computer_Science");
    $CS = $root->appendChild($CS);
    $CS->appendChild($dom->createElement('Student_name','Sumant Pujari  '));
    $CS->appendChild($dom->createElement('Class_name','TYBSc'));
    $CS->appendChild($dom->createElement('Percentage','92.00'));

    $CS = $dom->createElement("Computer_Science");
    $CS = $root->appendChild($CS);
    $CS->appendChild($dom->createElement('Student_name','Akhil Salunke  '));
    $CS->appendChild($dom->createElement('Class_name','TYBSc'));
    $CS->appendChild($dom->createElement('Percentage','86.45'));

    $CS = $dom->createElement("Computer_Science");
    $CS = $root->appendChild($CS);
    $CS->appendChild($dom->createElement('Student_name','Yash Shirke  '));
    $CS->appendChild($dom->createElement('Class_name','TYBSc'));
    $CS->appendChild($dom->createElement('Percentage','69.69'));

    $CS = $dom->createElement("Computer_Science");
    $CS = $root->appendChild($CS);
    $CS->appendChild($dom->createElement('Student_name','Ajay Veer '));
    $CS->appendChild($dom->createElement('Class_name','TYBSc'));
    $CS->appendChild($dom->createElement('Percentage','99.99'));

    $CS = $dom->createElement("Computer_Science");
    $CS = $root->appendChild($CS);
    $CS->appendChild($dom->createElement('Student_name','Yash Satav  '));
    $CS->appendChild($dom->createElement('Class_name','TYBSc'));
    $CS->appendChild($dom->createElement('Percentage','56.89'));

    

    echo $dom->saveXML();
    $dom->save($xml_file_name);
?>

