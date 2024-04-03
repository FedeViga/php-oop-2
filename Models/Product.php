<?php

class Product {
    public $category;
    public $name;
    public $brand;
    public $price;
    public $image;
    
    /**
     * __construct
     *
     * @param  category $_category
     * @param  string $_name
     * @param  string $_brand
     * @param  float $_price
     * @param  string $_image
     */
    public function __construct(Category $_category, $_name, $_brand, $_price, $_image)
    {
        $this->category = $_category;
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->image = $_image;
    }
}