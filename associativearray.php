<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=array("name"=>"Maulik","city"=>"rajkot","count"=>"123"); 
    $b["salary"]=1000;
    $b["class"]="A";
    $c=array(10,"games"=>"cricket",35);
    foreach($a as $x)
    {
        echo "$x<br>";
    }
    echo "salary is: ". $b["salary"]."<br>";
    foreach($c as $k=>$d)
    {
        echo"[$k]=$d<br>";
    }
    
    print_r($a);
    ?>
    
</body>
</html>