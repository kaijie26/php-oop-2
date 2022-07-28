<?php
    class AnimalProduct {
        public $price;

        public $category;

        public $size ;

        public $brand = 'Lidl' ;

        public function __construct($_price, $_category, $_size ){
        
            $this->price = $_price;
            $this->category = $_category;
            $this->size = $_size;
    
        }

        public function getIfo(){
            return "La categoria del prodotto è $this->category e la taglia del prodotto è $$this->size, come brand trovimo $$this->brand. Il prezzo del prodotto è di $$this->price $. ";
        }

        
    }

    
?>