<?php
//memahami oop 

//membuat class
class Student
{
    //membuat properti
    var $firstName;
    var $lastName = 'none';

    //membuat method
    function sayHello(){
        return "Hello, World!";
    }

    //mengunakan instance dalam class menugnakan $this->
    function fullName(){
        return $this->firstName .' ' . $this->lastName;
    }
}

//membuat instance atau biasa disebu object

$student1 = new Student;
$student2 = new Student;


//menguankan/memangil instance dan properti 
//cara mengunakan intance 
//di luar class : $variable->
//di dalam class : $this->
$student1->firstName = 'hmnk';
$student1->lastName = 'wndkb';


//tampilkan hasilnya
echo $student1->firstName . "<br>";
echo $student1->lastName . "<br>";
echo $student1->fullName();

//tampilkan hasil methode
echo $student1->sayHello() . "<br>";
echo $student2->sayHello() . "<br>";


//menampilkan properti dalam class
$class_vars = get_class_vars('Student');

//tampilkan
echo "properti milik student :";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

//menampilkan method dalam class
$class_methods = get_class_methods('Student');

//tampilkan
echo " method milik student :";
echo "<pre>";
print_r($class_methods);
echo "</pre>";

//mebuat validasi untuk properti
if(method_exists('Student', 'sayHello')){
    echo "Method sayhello tersedia";
}else{
    echo "Method sayhello tidak Tersedia";
}

?>