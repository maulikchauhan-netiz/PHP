<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        name:<input type="text" name="uname"><br>
        marks1:<input type="text" name="m1"><br>
        marks2:<input type="text" name="m2"><br>
        marks3:<input type="text" name="m3"><br>
        marks4:<input type="text" name="m4"><br>
        marks5:<input type="text" name="m5"><br>
        <input type="submit" name="sb" value="Show Result">
    </form>
    <?php
    if(isset($_GET["sb"]))
        {
            $m1 = $_GET["m1"];
            $m2 = $_GET["m2"];
            $m3 = $_GET["m3"];
            $m4 = $_GET["m4"];
            $m5 = $_GET["m5"];

            $total=$m1+$m2+$m3+$m4+$m5;
            $per($total*100)/500;
            if($m1>=35 && $m2>= 35 && $m3>=35 && $m4>=35 && $m5>=35)
                {
                    echo "pass";
                }
            else
                {
                echo "fail";
                }    
        }
    
    ?>
</body>
</html>