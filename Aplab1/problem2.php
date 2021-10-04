<?php

class car{
    public $EngineNo;
    public $Model;
    public $Owner;

    function __construct($EngineNo,$Model,$Owner){
        $this->EngineNo=$EngineNo;
        $this->Model=$Model;
        $this->Owner=$Owner;
    }

    function showinfo(){
        echo "Car Engine Number:" .$this->EngineNo."<br>";
        echo "Car Model:" .$this->Model."<br>";
        echo "Car Owner:" .$this->Owner."<br>";  

    }

    
}

$car1=new car("23EA-2020" , "Audi-A8", "Bishowjit Saha");
$car2=new car("00BA-2021", "NISSAN GTR", "Don John");
$car1->showinfo();
echo "##########";
$car2->showinfo();

