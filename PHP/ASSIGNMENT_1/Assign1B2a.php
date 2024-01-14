<?php
if(isset($_POST['style']) && isset($_POST['size']) && isset($_POST['colour']) && isset($_POST['bg']))
{
   $style=$_POST['style'];
    $size=$_POST['size'];
     $colour=$_POST['colour'];
    $bgcolor=$_POST['bg'];

    setCookie("sty",$style,time()+3600);
    setCookie("size",$size,time()+3600);
    setCookie("colour",$colour,time()+3600);
    setCookie("bg",$bgcolor,time()+3600);

   header("Location: Assign1B2b.php");
}


?>
