<?php

public class Calculator{
    public $a;
    public $b;
    public int $commandType;

    function add($a, $b) 
    {
          return $a+$b;
    };
    function substract ($a, $b) 
    {
          return $a-$b;
    };
    function divide($a, $b) 
    {
          return $a/$b;
    };
    function times($a, $b) 
    {
          return $a*$b;
    };

    function mainframe($a, $b, $commandType){
        if($commandType=="add"){add($a,$b);} 
        elseif($commandType=="substract"){substract($a,$b);} 
        elseif($commandType=="divide"){divide($a,$b);}
        elseif($commandType=="times"){times($a,$b);}
        else{echo "error";};
    

    }



}


