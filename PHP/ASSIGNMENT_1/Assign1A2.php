<?php
$auth_yes=0;
$tm=time();
session_start();
#session_register();
?>

<form action="Assign1A2new.php" method="GET">
    <fieldset>
        <legend>Enter Username and Password</legend>
        <p>Roll No:&nbsp&nbsp&nbsp<input type="text" name="rno"><br>
        <p>Name:&nbsp&nbsp&nbsp<input type="text" name="nm"><br>
        <p>City:&nbsp&nbsp&nbsp<input type="text" name="ct"><br><br>
        <input type="submit" value="submit">
</form>
