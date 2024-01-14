<?php

$a=$_GET['rno'];
$b=$_GET['nm'];
$c=$_GET['ct'];

session_start();
$newt=$tm+60;
if($newt>time())
echo "SESSION TIMEOUT";
else
{
    echo "<h1>STUDENT DETAILS</h1>";
    echo "<h2>Roll No: $a</h2>";
    echo "<h2>Name: $b</h2>";
    echo "<h2>City: $c</h2>";
}

session_destroy();
?>