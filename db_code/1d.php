<?php
$c=mysqli_connect("localhost","root","");
if($c)
    {
        $a="create database employee";
        if(mysqli_query($c, $a))
            echo "database created successfully";
        else
            echo mysqli_error($c);
    }
?>    