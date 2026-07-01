<!Doctype html>
<html>
<body>

<?php
$x="green";
switch ($x) 
{
    case 'green':
        echo "<body bgcolor = 'green'></body>";
        break;
    case 'red':
        echo "<body bgcolor = 'red'></body>";
        break;
    case 'yellow':
        echo "<body bgcolor = 'yellow'></body>";
        break;
    case 'blue':
        echo "<body bgcolor = 'blue'></body>";
        break;
    
    
    default:
       echo "invalid color";
        break;
}
?>
</body>
</html>