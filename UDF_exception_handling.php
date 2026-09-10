<?php
    function test($bal,$w)
    {
        try
        {
            if($bal<$w)
                {
                    throw new Exception("Balance must be more than withdrawal amount");
                }
                else
                {
                   echo "Amount withdrawal successlly";
                }             
        }
        catch(Exception $e)
        {
            echo "Sorry: ".$e->getMessage() ;
        }
    }    
        test("2000","15000");