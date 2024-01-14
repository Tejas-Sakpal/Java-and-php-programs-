<?php

$x=$_COOKIE['name'];
$y=$_COOKIE['classs'];
$z=$_COOKIE['address'];

$phy=$_POST['phy'];
$chem=$_POST['chem'];
$bio=$_POST['bio'];
$maths=$_POST['maths'];
$marathi=$_POST['marathi'];
$eng=$_POST['eng'];

$total=$phy+$chem+$bio+$maths+$marathi+$eng;
$per=$total/6.0;

?>

<html>
    <center>
    <table border="2" align="center">
        <tr>
            <th colspan="2">MARKSHEET</th>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <b>NAME: </b><?php echo "$x";?><br>
                <b>CLASS: </b><?php echo "$y";?><br>
                <b>ADDRESS: </b><?php echo "$z";?><br>
            </td>
        </tr>
        <tr align="center">
            <td >PHYSICS</td><td><?php echo "$phy";?></td>
        </tr>
        <tr align="center">
            <td>CHEMISTRY</td><td><?php echo "$chem";?></td>
        </tr>
        <tr align="center">
            <td>BIOLOGY</td><td><?php echo "$bio";?></td>
        </tr>
        <tr align="center">
            <td>MATHS</td><td><?php echo "$maths";?></td>
        </tr>
        <tr align="center">
            <td>MARATHI</td><td><?php echo "$marathi";?></td>
        </tr>
        <tr align="center">
            <td>ENGLISH</td><td><?php echo "$eng";?></td>
        </tr>
        <tr align="center">
            <td>TOTAL</td><td><?php echo "$total";?></td>
        </tr>
        <tr align="center">
            <td>PERCENTAGE</td><td><?php echo "$per";?></td>
        </tr>
    </table>
    </center>
</html>



