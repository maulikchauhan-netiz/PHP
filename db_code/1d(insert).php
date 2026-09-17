<?php
$c=mysqli_connect("localhost","root","");
if($c)
    {
        mysqli_select_db($c,"employee");
        $a="insert into edata values('isha',2322674599)";

        if(mysqli_query($c, $a))
            echo"record inserted successfully";
        else
            echo  mysqli_error($c);
    }
?>     