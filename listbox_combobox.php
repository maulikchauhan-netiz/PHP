<html>
    <body>
        <form>
            semester : <select name = "sem">
                <option value = "semester - 1">sem-1</option>
                <option value = "semester - 2">sem-2</option>
                <option value = "semester - 3">sem-3</option>
                <option value = "semester - 4">sem-4</option>
</select>
<br>
<br>
subjects:<select name="sub[]" size="4" multiple="multiple">
    <option value = "compter network">Network</option>
    <option value = "php">php</option>
    <option value = "python">python</option>
    <option value = "ENV">ENV</option>
    <option value = "compter">computer</option>
</select>
<br>
<br>
<input type = "submit" name = "sb" value = "Display">
</form>
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
                    echo "<hr>";
            }
            else
            {
                echo "<script>alert('please select the data');</script>";
            }

    }
        

?>   
</body>
</html>
    
    
    
