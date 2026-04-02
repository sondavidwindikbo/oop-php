<?php 
//APA ITU INHERITANCE
// Inheritance (pewarisan) adalah konsep di mana sebuah class bisa mewarisi sifat (property & method) dari class lain

class User {
   var $firstName;
   var $lastName;

   function fullName(){
        return $this->firstName . ' ' . $this->lastName;
   }
}

class Customer extends User{

}

//membuat instance
$c = new Customer;


$c->firstName = 'hmnk';
$c->lastName = 'son';

//tampilkan
echo $c->fullName(). "<br>";


if (is_subclass_of($c, 'user')){
    echo "Instance customer merupkan subclass class User <br/>";
}

$parents = class_parents($c);
echo implode(',', $parents);
?>