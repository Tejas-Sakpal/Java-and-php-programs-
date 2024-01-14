<?php
	$dom = new DOMDocument();
		$dom->encoding = 'ISO-8859-1';
		$dom->xmlVersion = '1.0';
		$dom->formatOutput = true;
	$xml_file_name = './Assign7B1.xml';
	
	$dom->appendChild($dom->createProcessingInstruction(
        'xml-stylesheet', 'type="text/css" href="Assign7B1.css"'
    ));


    $root = $dom->createElement('CD_Store');

    $root = $dom->appendChild($root);

    $CS = $dom->createElement("Movie");
    $CS = $root->appendChild($CS);
    $CS->appendChild($dom->createElement('Title1','Mr. India'));
    $CS->appendChild($dom->createElement('Release_Year','1987'));

    $CS = $dom->createElement("Movie");
    $CS = $root->appendChild($CS);
    $CS->appendChild($dom->createElement('Title1','Holiday'));
    $CS->appendChild($dom->createElement('Release_Year','2014'));

    $CS = $dom->createElement("Movie");
    $CS = $root->appendChild($CS);
    $CS->appendChild($dom->createElement('Title1','LOC'));
    $CS->appendChild($dom->createElement('Release_Year','2003'));

    echo $dom->saveXML();
    $dom->save($xml_file_name);
    ?>
