<?php

class Category {

    public $animal;
    public $icon;
    
    /**
     * __construct
     *
     * @param  string $_animal
     * @param  string $_icon
     */
    public function __construct($_animal, $_icon) {
        $this->animal = $_animal;
        $this->icon = $_icon;
    }


}