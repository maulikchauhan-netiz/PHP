<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            background-color: rgb(204, 202, 202);
            text-align: center;
        }
    </style>
</head>

<body>
    <form method="post">
        <table border="2" align="center">
            <tr>
                <td colspan="2" >Login Form</td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Password</td>
                 <td><input type="password" name="pass" required></td>
            </tr>
            <tr>
                <td colspan="2">
                     <input type="submit" name="sb" value="Login">
                     <input type="reset" name="rs">
                </td>
            </tr>
           <tr>
            <td colspan = "2">Not Registered ? <a href="register.php">Sign up Here</a></td></tr>


        </table>
    </form>

</body>

</html>