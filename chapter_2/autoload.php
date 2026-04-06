<?php 

// Method autoload adalah fitur di PHP (terutama dalam konsep OOP)
//  yang digunakan untuk memuat (load) class secara otomatis tanpa 
//  perlu menulis require atau include satu per satu.

function myAutoload($class) {
    if (preg_match('/\A\w+\Z/' , $class)) {
        include 'classes/' . $class . ".php";
    }
}

spl_autoload_register('myAutoload');

$cat = new Cat();

echo $cat->name;

?>