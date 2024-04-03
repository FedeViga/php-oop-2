<?php

class Game extends Product{
    public $animalSize;
    public $gameType;
    
    /**
     * __construct
     *
     * @param  category $_category
     * @param  string $_name
     * @param  string $_brand
     * @param  float $_price
     * @param  string $_image
     * @param  string $_animalSize
     * @param  string $_gameType
     */
    public function __construct(Category $_category, $_name, $_brand, $_price, $_image, $_animalSize, $_gameType) {
        parent::__construct($_category, $_name, $_brand, $_price, $_image);
        $this->animalSize = $_animalSize;
        $this->gameType = $_gameType;
    }
}