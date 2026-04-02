<?php
//memahami oop 

//membuat class
class Student
{
    //membuat properti
    var $name;
    var $country = 'none';
}

//membuat instance atau biasa disebu object
$student1 = new Student;
$student2 = new Student;

//memangil object dan properti 
$student1->name = 'hmnk';
$student2->name = 'wndkb';

//tampilkan hasilnya
echo $student1->name . "<br>";
echo $student2->name . "<br>";


//menampilkan properti dalam class
$class_vars = get_class_vars('Student');

//tampilkan
echo "properti milik student :";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

//mebuat validasi untuk properti
if(property_exists('Student', 'name')){
    echo "Properti name tersedia";
}else{
    echo "Properti name tidak Tersedia";
}

?>