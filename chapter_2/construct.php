<?php 

class Student {
    public static $instanceCount = 0;

    //constructor
    public function __construct()
    {
        self::$instanceCount++;  //self:: → digunakan untuk mengakses property static dalam class yang sama
    }
    
}

//inheritance /pewarisan
class Elementary extends Student {
    public $total = 3;
}

class Junior extends Student {
    public $total = 2;
}

class Senior extends Student{
    public $total = 4;
}

//instance atau object
$elementary = new Elementary;
echo "Elementary: {$elementary->total} <br>";

$junior = new Junior;
echo "Junior: {$junior->total} <br>";

$senior = new Senior;
echo "Senior: {$senior->total} <br>";

echo "Instance Count: " . Student::$instanceCount;

?>