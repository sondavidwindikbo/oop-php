<?php
// //APA ITU ECCAPSULATION
// Encapsulation di PHP itu konsep dalam OOP (Object-Oriented Programming)
// untuk menyembunyikan data di dalam class dan hanya memberi akses lewat cara tertentu (method).

// Di PHP, encapsulation pakai access modifier:

// public → bisa diakses dari mana saja
// private → hanya bisa diakses di dalam class
// protected → bisa diakses di class & turunannya

class User
{
    public $firstName;
    public $lastName;
    public $userName;

    protected $regID = 1001;
    protected $level = 'User';


    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    protected function sayProtected()
    {
        return "hello, Protected";
    }

    private function sayPrivate() 
    {
        return "Hello, Private";
    }

    public function sayMe()
    {
        return $this->sayPrivate();
    }
}

class Customer extends User {

    public function sayParent()
    {
        return $this->sayProtected();
    }

}

//membuat instance
$u = new User;


$u->firstName = 'User';
$u->lastName = 'Class';


//tampilkan
// echo $u->regID . "<br>";
// echo $u->level . "<br>";
echo $u->fullName() . "<br>";
// echo $u->sayProtected() . "<br>";
// echo $u->sayPrivate() . "<br>";

//membuat instance
$c = new Customer;


$c->firstName = 'hmnk';
$c->lastName = 'son';

//tampilkan
echo $c->fullName() . "<br>";
echo $c->sayParent() . "<br>";
echo $c->sayMe() . "<br>";

