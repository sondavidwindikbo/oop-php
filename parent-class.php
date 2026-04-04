<?php 

//Dalam PHP (OOP), parent adalah keyword yang digunakan untuk mengakses property atau method dari class induk (parent class).
//parent = kelas induk

class Programer {

public static function makeSystem() 
{
    echo "Start Coding";

}
}

class AmateurProgramer extends Programer {
    public static function makeSystem()
    {
        echo "read Documentation <br>";
        parent::makeSystem() . "<br>"; //memangil parent yaitu class Programer
        echo "Clean up mess.";
    }
}

echo "Programer : <br>";
echo Programer::makeSystem(). "<br>";

echo "Amateur Programer: <br>";
echo AmateurProgramer::makeSystem(). "<br>";



class Image {
    public static $resizeStatus = true;
    
    public static function geometry()
    {
        echo "760x300";
    }
}

class PhotoProfile extends Image {
    public static function geometry()
    {
        if(self::$resizeStatus){
            echo "50x50";
        }else {
            parent::geometry();
        }
    }
}

echo Image::geometry() . "<br>";
echo PhotoProfile::geometry() . "<br>";

Image::$resizeStatus = false;
echo PhotoProfile::geometry() . "<br>"

?>