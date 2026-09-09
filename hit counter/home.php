<?php
header("Cache-Control:no-store,no-cache,no-revalidate");
session_start();
if (!isset($_SESSION["uname"]))
    {
        header("Location:login.php") ;
    }
    else
    {
        echo "WELCOME:".$_SESSION["uname"];
        echo "<a href='home1.php'>home1</a>";

    }
?>