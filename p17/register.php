<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td,th {
            background-color: rgb(204, 202, 202);
            text-align: center;
            padding: 5px;
        }
    </style>
</head>

<body>
    <form method="post">
        <table border="2" align="center">
            <tr>
                <th colspan="2" >Registration Form</th>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="uname" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Moblie number</td>
                 <td><input type="text" name="Moblie" maxlength="10" required></td>
            </tr>
            <tr>
                <td>City</td>
                 <td><input type="text" name="City" required></td>
            </tr>
            <tr>
                <td colspan="2">
                     <input type="submit" name="sb" value="Sign up">
                     <input type="reset" name="rs">
                </td>
            </tr>
           <tr>
            <td colspan = "2">Already Registered ? <a href="login.php">Login Here</a></td></tr>
           

        </table>
         <hr>
    </form>
    <?php
    if(isset($_POST["sb"]))
        {
            echo "<script>alert('Registration is done successfully');</script>";

        echo "Name :- ".$_POST["uname"];
        echo "<br>Email :- ".$_POST["email"];
        echo "<br>Mobile Number :- ".$_POST["Moblie"];
        echo "<br>City :- ".$_POST["City"];
        echo "<hr>";
        }
    ?>

</body>

</html>