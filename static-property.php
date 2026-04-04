<?php 

//STATIC 
//static property dan static method adalah bagian dari class yang tidak perlu dibuat objeknya dulu untuk digunakan.
//static = bisa dipanggil tanpa membuat object

class Student{
    public static $grades = ['SD','SMP','SMA'];
    private static $totalStudents = 0;

    public static function motto()
    {
        return 'Learn PHP OOP';
    }

    public static function count()
    {
        return self::$totalStudents;  //self:: Digunakan untuk mengakses property atau method static dalam class yang sama

    }

    public static function addStudent()
    {
        return self::$totalStudents++;
    }
}

echo Student::$grades[1]. '<br>';
echo Student::motto();

// echo Student::$totalStudents;

echo Student::count() . '<br>';
Student::addStudent() . '<br>';
echo Student::count() . '<br>';


 ?>