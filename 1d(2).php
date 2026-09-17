<?php
$c=mysqli_connect("localhost","root","");
if($c)
    {
        mysqli_select_db($c,"employee");
        $a="create table edata(ename varchar(20),mobile bigint(12))";
        if(mysqli_query($c, $a))
            echo"table is created succesfully";
        else
            echo  mysqli_error($c);
    }
?>     