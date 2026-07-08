<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = array(
        array("Ram", "Rajkot", 20),
        array("Maya", "Morbi", 20),
        array("Raj", "surat", 20)
    );
    foreach($a as $x)
    {
        foreach($x as $y){
            echo "$y "; 
        }
        echo "<br>";
         
    }
    for($i=0;$i<3;$i++)
    {
        for($j=0;$j<3;$j++)
        {
            echo $a[$i][$j]." ";
        }

        echo "<br>";
        
    }
    print_r($a)
    ?>
    
 
    
</body>
</html>