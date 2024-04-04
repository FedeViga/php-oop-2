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

        // controllo che l'icona dell'animale sia corretta
        if ($_icon == "fa-dog" || $_icon == "fa-cat") {

            $this->icon = $_icon;
            
        } else {
            throw new Exception ("icona animale non supportata");
        }
    }


}