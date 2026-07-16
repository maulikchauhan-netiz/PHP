<?php
    $a=array(1,2,3,4);
    echo "number of elements in array is : ".count($a)."<br>";
    $b=array("riya",25,"diplopma");
    list($name,$age,$course)=$b;
    echo "Name is : $name<br>";
    echo "Age is : $age<br>";
    echo "Course is : $course<br>";
    if(in_array("riya",$b))
    {
        echo "element is found in array<br>";
    }
    else
    {
        echo "element is not found in array<br>";
    }
    echo "current element is : ".current($b)."<br>";
    echo "next element is : ".next($b)."<br>";
    next($b)."<br>";
    echo "previous element is : ".prev($b)."<br>";
    echo "end element is : ".end($b)."<br>";   
    $c=array(20,10,30,50,40);
    echo "sorted array is : ".sort($c)."<br>";
    sort($c);
    print_r($c);
    echo "<br>";
    print_r(array_reverse($c));
    echo "<br>";
    print_r(array_merge($a,$c));
    echo "<br>";
   
?>
