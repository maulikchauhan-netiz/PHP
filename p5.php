<?php
$a=10;
$b=20;
function getvalue()
{
  $GLOBALS['a']=$GLOBALS['a']+5;
  $GLOBALS['b']=$GLOBALS['b']+5;
}
getvalue();
echo" a:$a<br> b:$b";
?>
