<?php
function display($a)
{
    echo "<br>number of arguents :".func_num_args();
    $b=func_get_args();
    foreach($b as $x)
    {
        echo "<br>$x";
    }
}
display(1,2.5,"maulik");
display(2,"chauhan");
?>  