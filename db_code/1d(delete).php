<?php
$c=mysqli_connect("localhost","root","");
if($c)
    {
        mysqli_select_db($c,"employee");
        $a="delete from edata where ename='isha'";

        if(mysqli_query($c, $a))
            echo"record deleted successfully";
        else
            echo  mysqli_error($c);
    }
?>     