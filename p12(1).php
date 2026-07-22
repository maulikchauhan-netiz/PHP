<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        number_1<input type = "number" name="num1" min="1" max="50" step="1" required><br>
        number_2<input type = "number" name="num2" min="1" max="50" step="1" required><br>
        <input type = "submit" name="sb" value="ADD">
</form>
<?php
    if(isset($_GET["sb"]))
        {
            $a=$_GET["num1"];
            $b=$_GET["num2"];
            $c=$a+$b;
            echo "addition is : ",$c;
        }
    ?>


</body>
</html>