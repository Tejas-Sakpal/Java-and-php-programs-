<?php

$name=$_POST['name'];
$class=$_POST['class'];
$address=$_POST['address'];

setcookie(name,$name,time()+3600);
setcookie(classs,$class,time()+3600);
setcookie(address,$address,time()+3600);

?>

<html>
    <body>
        <form action="Assign1B3new.php" method="POST">
            <b>ENTER MARKS OF PHYSICS: </b><input type="text" name="phy"><br>
            <b>ENTER MARKS OF CHEMISTRY: </b><input type="text" name="chem"><br>
            <b>ENTER MARKS OF BIOLOGY: </b><input type="text" name="bio"><br>
            <b>ENTER MARKS OF MATHS: </b><input type="text" name="maths"><br>
            <b>ENTER MARKS OF MARATHI: </b><input type="text" name="marathi"><br>
            <b>ENTER MARKS OF ENGLISH: </b><input type="text" name="eng"><br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>