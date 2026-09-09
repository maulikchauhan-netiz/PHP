<?php
header("Cache-Control:no-store,no-cache,no-revalidate");
?>
<html>
        <body>
            <form method="POST">
                Username:<input type="text" name="uname"><br>
                Password:<input type="password" name="pass"><br>
                <input type="submit" name="sb" value="Login"><br>
            </form>
            <?php
            if (isset($_POST["sb"])) 
                {
                    session_start();
                    $_SESSION["uname"] = $_POST["uname"];
                    header("Location:home.php");
                }     
            ?>
        </body>  
</html>