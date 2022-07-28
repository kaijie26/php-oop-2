<?php
    class AnimalProduct {
        public $price;

        public $category;

        public $size;

        public $brand;

        public function __construct($_price, $_category, $_size, $brand ){
        
            $this->price = $_price;
            $this->category = $_category;
            $this->size = $_size;
            $this->brand = $brand;
    
        }
    }

    
?>