<?php
require_once __DIR__ . "/product.php";

class food extends product {
    private $expiration_date;
    private $kcal;

    public function __construct(string $name,string $image,float $price, category $category, string $expiration_date, int $kcal)
    {
        parent::__construct($name, $image, $price, $category);
        $this->expiration_date = $expiration_date;
        $this->kcal = $kcal;   
    }

    public function setExpiration($date)
    {
        $this->expiration_date = $date;
    }

    public function getExpiration() {
        return $this->expiration_date;
    }

    public function getKcal()
    {
        return $this->kcal;
    }

    

}