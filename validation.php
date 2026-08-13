<html>
    <head>
        <style>
            .error{
            color: red;
            
            }
        </style>
    </head>
    <body>
        <?php
        $n1 = $m1 = $a1 = $b1 = " ";
        if(isset($_POST["sb"]))
        {
            if(is_numeric($_POST["uname"]))
            {
                $n1 = "username can't be numeric";
            }
            else
            {
                $a1 = "username is : ".$_POST["uname"];
            }
         
          if(strlen($_POST["pass"])<10)
            {
                $m1 = "password must be of length ten";
            }
            else
            {
                $b1 = "password is : ".$_POST["pass"];
            }  
        
        }
        ?>
        <form method = "post">
            username:<input type = "text" name = "uname"><span class = "error">*<?php if(isset($n1))echo $n1;?></span><br><br>
            password:<input type = "password" name = "pass"><span class = "error">*<?php if(isset($m1))echo $m1;?></span><br><br>
            
            <input type = "submit" name = "sb" value = "login">
            <input type = "reset" name = "rs" value = "reset">

</form>
<?php
            echo "$a1 <br> $b1";

?>


    </body>
</html>