<?php
require_once __DIR__ . "/product.php";

class toys extends product {
    private $materials;
    private $size;

    public function __construct(string $name,string $image,float $price, category $category, string $materials, string $size)
    {
        parent::__construct($name, $image, $price, $category);
        $this->materials = $materials;
        $this->size = $size;
    }

    public function getMaterials()
    {
       return $this->materials;
    }

    public function getSize() {
        return $this->size;
    }
}