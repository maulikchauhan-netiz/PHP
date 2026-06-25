<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sum = 0 ;
    for($i = 1;$i <= 10; $i++)
    {
        #echo "numbers is : $i <br>";
        $sum=$sum + $i;
    }
    echo "value is : $sum"
    ?>
</body>
</html>