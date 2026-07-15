<?php
    echo chr(65)."<br>";
    echo ord('A')."<br>";
    echo strlen("maulik")."<br>";
    $a = " maulik ";
    echo "Lenght is : $a<br>";
    trim($a);
    echo "Length is :$a<br>";
    $b=array("hello","how","are","you");
    echo join(" ",$b)."<br>" ;
    echo substr("friend",3)."<br>";
    echo str_replace("your","my","this is your choice")."<br>";
    print_r(str_split("hello"));
    echo "<br>";
    echo str_word_count("this is my class ")."<br>";
    
    echo strcmp("Hello","hello")."<br>";
    echo strpos("friend","r")."<br>";
    echo strrev("atmiya")."<br>";
    echo strtolower("WELCOME")."<br>";
    echo strtoupper("welcome")."<br>";
    echo str_shuffle("Atmiya University")."<br>";
    echo ucfirst("welcome to atmiya")."<br>";
    echo ucwords("welcome to atmiya")."<br>";
?>    
