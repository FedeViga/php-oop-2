<?php
class Kennel extends Product{

    use Sizeable;
    use Weightable;

    public $measures;
    
    /**
     * __construct
     *
     * @param  category $_category
     * @param  string $_name
     * @param  string $_brand
     * @param  float $_price
     * @param  string $_image
     * @param  string $_animalSize
     * @param  string $weight
     * @param  string $_measures
     */
    public function __construct(Category $_category, $_name, $_brand, $_price, $_image, $_animalSize, $_weight, $_measures) {
        parent::__construct($_category, $_name, $_brand, $_price, $_image);
        $this->animalSize = $_animalSize;
        $this->weight = $_weight;
        $this->measures = $_measures;
    }
}