<?php 
//APA ITU OOP 
// Intinya OOP itu apa?

// 👉 OOP itu cara berpikir seperti ini:

// Semua benda = object
// Setiap benda punya:
// data (property) → warna, nama
// aksi (method) → jalan, makan //Method adalah fungsi yang ada di dalam class

// 🎮 Versi paling simpel
// Dunia nyata	OOP
// Cetakan kue	Class
// Kue jadi	Object
// Rasa kue	Property
// Makan kue	Method

//CARA MENDEFINISIKAN CLASS
//Mengecek apakah sebuah class sudah ada atau belum

class Student{

}

$classes = get_declared_classes();

echo "Classes: " . implode(',', $classes) . "<br>"; //implode() adalah fungsi di PHP yang digunakan untuk:

$classNames = ['Product','Student','student'];

foreach ($classNames as $className){
    if(class_exists($className)){ //class_exists() adalah fungsi di PHP untuk: Mengecek apakah sebuah class sudah ada atau belum

        echo "{$className} class ada. <br/>";
    }else{
        echo "{$className} class tidak ada. <br/>"; 
    }
}

//MEMAHAMI INSTANCE OBJECT



?>