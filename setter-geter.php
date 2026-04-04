<?php 

class Product {
    private $price;

    public function setPrice($value) {
        $noFormat = preg_replace('/Rp/', '', $value);
        $float = floatval($noFormat);
        if($float <= 0) {
            //show error
            return;
        }
        $this->price = $float;

    }
    public function getPrice()
    {
        return 'Rp' . number_format($this->price, 2);
    }
}

?>