<?php
    $xml=simplexml_load_file("books.xml") or die("cannnot load");
    for($i=1;$i<=12;$i++){
	echo "<h2><u>"."Book $i: "."</u></h2>";
        echo "<b>Author:</b> ".($xml->book[$i-1]->author)."<br>";
	echo "<b>Title:</b> ".($xml->book[$i-1]->title1)."<br>";
	echo "<b>Genre:</b> ".($xml->book[$i-1]->genre)."<br>";
	echo "<b>Price:</b> ".($xml->book[$i-1]->price)."<br>";
	echo "<b>Published Date:</b> ".($xml->book[$i-1]->publish_date)."<br>";
	echo "<b>Description:</b> ".($xml->book[$i-1]->description)."<br><br>";
    }
?>
