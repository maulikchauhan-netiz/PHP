<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 30;
    if($x==30)
    {
    echo "<p style = 'font-size:30px; color:red'> The font size is 30px </p>";
    }
    elseif($x==40)
    {
        echo "<p style = 'font-size:40px; color:green'> The font size is 40px </p>" ;
    }
    elseif($x==50)
    {
        echo "<p style = 'font-size:50px; color:purple'> The font size is 50px </p>" ;
    }
    else
    {
        echo "<p style = 'font-size:100px; color:pink'> The font size is 100px </p>" ;
    }
    ?>
</body>
</html>