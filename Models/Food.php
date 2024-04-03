<?php

class Food extends Product{
    public $weight;
    public $taste;
    public $quantity;
    
    /**
     * __construct
     *
     * @param  category $_category
     * @param  string $_name
     * @param  string $_brand
     * @param  float $_price
     * @param  string $_image
     * @param  int $_weight
     * @param  string $_taste
     * @param  string $_quantity
     */
    public function __construct(Category $_category, $_name, $_brand, $_price, $_image, $_weight, $_taste, $_quantity) {
        parent::__construct($_category, $_name, $_brand, $_price, $_image);
        $this->weight = $_weight;
        $this->taste = $_taste;
        $this->quantity = $_quantity;
    }
}