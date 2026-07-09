<?php
$a=array(1,2,3);
$b=array(4=>4,5=>5);
$c=$a+$b;
foreach($c as $k=>$x)
{
    echo $k. "=>".$x."<br>";
}

?>  