<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    const a=10;
    define("name","atmiya");
    echo "value of a=",a ."<br>";
    echo constant("name"). "<br>";
    echo __LINE__;
    echo __FILE__;
    ?>
</body>
</html>