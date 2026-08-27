<?php
    $a=fopen("data.txt","w");
    fwrite($a,"hello world");
    fclose($a);
    echo "writing is successful in file";
?>