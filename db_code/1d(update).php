<?php
$c=mysqli_connect("localhost","root","");
if($c)
    {
        mysqli_select_db($c,"employee");
        $a="update edata set mobile='1111111111' where ename ='isha'";

        if(mysqli_query($c, $a))
            echo"record updated successfully";
        else
            echo  mysqli_error($c);
    }
?>     