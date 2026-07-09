<?php
function sum($a)
{
  $s=0;
  $b=func_get_args();
    foreach($b as $x)
    {
        $s=$s+$x;
     
    }   
    return $s;
}
$d=sum(10,20,2.5);
echo "<br>addition is :".$d ;
$d=sum(2.5,10);
echo "<br>addition is :".$d ;
?>  