<html>
    <body>
        <table border="1" style = "margin:auto">
            <form>
                <tr>
                    <td>semester</td>
                    <td><input type = "radio" name = "sem" value = "semester-1">sem-1</td>
                    <td><input type = "radio" name = "sem" value = "semester-1">sem-2</td>
                    <td><input type = "radio" name = "sem" value = "semester-1">sem-3</td>
                    <td><input type = "radio" name = "sem" value = "semester-1">sem-4</td>
                </tr>
                <tr>
                    <td>subjects</td>
                    <td><input type = "checkbox" name = "sub[]" value = "Computer Network">Network</td>
                    <td><input type = "checkbox" name = "sub[]" value = "pHp">pHp</td>
                    <td><input type = "checkbox" name = "sub[]" value = ".NET">.NET</td>
                    <td><input type = "checkbox" name = "sub[]" value = "python">python</td>
                </tr>
                <tr>
                    <td colspan="5"  align="center">
                    <input type = "submit" name = "sb" value = "submit"></td>
                </tr>
              
            </form>
    </table>
<hr>
<?php
    if(isset($_GET["sb"]))
    {
            if(isset($_GET["sem"]) && isset($_GET["sub"]))
            {
                echo "semester is : ".$_GET["sem"]."<br>";
                $a=$_GET["sub"];
                $x = "subjects are : ";
                foreach($a as $i)
                    {
                        $x=$x.$i." ";
                    }
                    echo $x."<br>";
            }
            else
            {
                echo "<script>alert('please select the data');</script>";
            }

    }
        

?>   
</body>
</html>        


