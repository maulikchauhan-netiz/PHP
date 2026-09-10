<?php
class car
{
    public $name;
    public $price;

    function __construct($nm, $pr)
    {
        $this->name = $nm;
        $this->price = $pr;
    }
    function display()
    {
        echo "Name: ". $this->name;
        echo "<br>Price: ". $this->price;
    }
    function __destruct()
    {
        echo "<br>Destructor is called";
    }
}
$c = new car("XUV",1000000);
$c->display();
?>