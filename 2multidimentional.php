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
      "first"=>array("Ram", "Rajkot", 20),
      "second"=> array("Maya", "Morbi", 20),
      "third"=> array("Raj", "surat", 20)
    );
    foreach($a as $k=>$x)
    {
        echo "$k ";
        foreach($x as $k1=>$y)
        {
            echo "[$k1]=$y";
        }
        echo "<br>";
    }
    
    ?>

</body>
</html>