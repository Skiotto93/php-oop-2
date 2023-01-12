<?php
require_once __DIR__ . "/../traits/nameItem.php";
class product {
    use nameItem;

    protected $image;
    protected $price;
    protected $category;

    public function __construct(string $name,string $image,float $price, category $category)
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->category = $category;
    }

    public function getImage() {
        return $this->image;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getCategory() {
        return $this->category;
    }
}