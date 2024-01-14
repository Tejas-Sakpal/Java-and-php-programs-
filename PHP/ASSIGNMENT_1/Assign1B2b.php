<html>
<?php
$bg=$_COOKIE['bg'];
$sty=$_COOKIE['sty'];
$colour=$_COOKIE['colour'];
$size=$_COOKIE['size'];
?>
<body bgcolor=$_COOKIE['bg']> 
<font face=$_COOKIE['sty']>Hello</font>
<font color=$_COOKIE['colour']>Good morning..</font>
<font size=$_COOKIE['size']>Bye</font> 
<?php
setCookie("bg",$bg,time()-3600);
setCookie("sty",$sty,time()-3600);
setCookie("color",$colour,time()-3600);
setCookie("size",$size,time()-3600);
?>        
</body>
</html>   
