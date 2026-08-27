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

        <br> <input type="submit" name="sb" value="Show Result">
    </form>
    <hr>
    <?php
    if(isset($_GET["sb"]))
        {
            $name = $_GET["uname"];
            $m1 = $_GET["m1"];
            $m2 = $_GET["m2"];
            $m3 = $_GET["m3"];
            $m4 = $_GET["m4"];
            $m5 = $_GET["m5"];

            $total=$m1+$m2+$m3+$m4+$m5;
            $per=($total*100)/500;

            echo "name :- ",$name."<br>";
            echo "Total marks :- ",$total."<br>";
            echo "Percentage :- ",$per."%<br>";
            
            if($m1>=35 && $m2>= 35 && $m3>=35 && $m4>=35 && $m5>=35)
                {
                    $res="pass";
                }
            else
                {
                     $res="fail";
                } 
            if($per>=70)
                {
                    $class="Distinction";
                }       
            elseif($per<70 && $per>=60)
                {
                    $class="first";
                } 
            elseif($per<60 && $per>=50)
                {
                    $class="second";
                }  
            elseif($per<50 && $per>=40)
                {
                    $class="third";
                }    
            $class="pass";
            $n=$_GET["uname"];
            echo "<table border='1' cellspacing='2'>";   
            echo "<tr><td colspan='2'  style='text-align:center'>Student Result</td></tr>"; 
            echo "<tr><td>Name</td><td> $n</td></tr>";
            echo "<tr>  <td>Marks</td><td>$m1,$m2,$m3,$m4,$m5 </td></tr>";
            echo "<tr><td>Total</td><td>$total</td></tr>";
            echo "<tr><td>Percentage</td><td>$per</td></tr>";
            echo "<tr><td>Result</td><td>$res</td></tr>";
            if($res=="pass")
                {
                    echo "<tr><td>Class</td><td>$class</td></tr>";
                }
            else
                {
                    echo "<tr><td>Class</td><td>--</td></tr>";
                }
                echo "</table>";                 
        }
        
    ?>
</body>
</html>