<?php 

//CONTSRUC ARGUMENT
// Constructor argument adalah:
// 👉 nilai (parameter) yang dikirim ke constructor saat membuat objek

class Student {
    public static $instanceCount = 0;  //properti 

    public $total;
    public $target;

    //constructor
    public function __construct($args =[])  //args[] itu parameter
    {
        self::$instanceCount++;  //self:: → digunakan untuk mengakses property static dalam class yang sama
        $this->total = $args['total'] ?? $this->total;
        $this->target = $args['target'] ?? $this->target;
    }
    
}

//inheritance /pewarisan
class Elementary extends Student {
    public $total = 3;
    public $target = 2;
}

class Junior extends Student {
    public $total = 2;
    public $target = 1;
}

class Senior extends Student{
    public $total = 4;
    public $target = 3;
}

//instance atau object
$elementary = new Elementary(['total' => 2, 'target' => 1]);  //total dan terget itu argument
echo "Elementary: {$elementary->total} <br>";
echo "Elementary: {$elementary->target} <br>";

$junior = new Junior(['total' => 4, 'target' => 3]);
echo "Junior: {$junior->total} <br>";
echo "Junior: {$junior->target} <br>";

$senior = new Senior();
echo "Senior: {$senior->total} <br>";
echo "Senior: {$senior->target} <br>";

echo "Instance Count: " . Student::$instanceCount;

?>