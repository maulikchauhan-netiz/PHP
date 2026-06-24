<?php
$a=10;
$b=20;
function getvalue()
{
    global $a,$b;
    $a=$a+5;
    $b=$b+5;
}
getvalue();
echo" a:$a<br> b:$b";
?>
