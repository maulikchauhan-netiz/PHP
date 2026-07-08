<?php
$a=array("one","two","three");
$b=array(10,"two",3);
$c[0]=20;
$c[1]="rajkot";
$c[3]="true";
for($i=0;$i<3;$i++)
    {
        echo $a[$i],"<br>";
    }
foreach ($b as $i) 
    {
      echo "    $i","<br>";
    }
for($i=0;$i<3;$i++)
    {
        echo $c[$i],"<br>";
    } 
    foreach ($c as $i) 
    {
      echo "    $i","<br>";
    }    
?>
