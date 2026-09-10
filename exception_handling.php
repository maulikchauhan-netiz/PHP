<?php
$age=15;
try
{
if($age<18)
{
    throw new Exception("Age must be above 18");
}
else
{
    echo "acess granted";
}
}
catch(Exception $e)
{
    echo $e->getMessage();
}

?>