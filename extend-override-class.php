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
    var $city;
    var $country;

    function location(){
        return $this->city . ' '. $this->country;
    }

    function fullName(){
        return $this->firstName . ' ' . $this->lastName . '(customer)';
   }
}

//membuat instance
$c = new User;


$c->firstName = 'Min';
$c->lastName = 'kgy';
// $c->city = 'jayapura';
// $c->country = 'Papua';

//tampilkan
echo $c->fullName(). "<br>";
// echo $c->location(). "<br>";

//membuat instance
$c = new Customer;


$c->firstName = 'hmnk';
$c->lastName = 'son';
$c->city = 'Jayapura';
$c->country = 'Papua';


//tampilkan
echo $c->fullName(). "<br>";
echo $c->location(). "<br>";


if (is_subclass_of($c, 'user')){
    echo "Instance customer merupkan subclass class User <br/>";
}

$parents = class_parents($c);
echo implode(',', $parents);
?>